from fastapi import APIRouter, Request, Form
from fastapi.responses import HTMLResponse, RedirectResponse, PlainTextResponse, Response

from app.config import SITE, IMAGES
from app.data import (
    SERVICES, THEMATIC_AREAS, PROJECTS, GALLERY_ITEMS,
    STORIES, BLOGS, TEAM, VALUES, PARTNERS,
    PRESENCE, PRESENCE_STATES_MAP, STATE_PROJECTS,
    REPORTS,
)
from app.data.projects import EXTERNAL_REFERENCES

router = APIRouter()


def ctx(request: Request, **kwargs):
    return {"request": request, "site": SITE, **kwargs}


# --- SEO: Sitemap & Robots ---------------------------------------------------

@router.get("/sitemap.xml", response_class=Response)
async def sitemap(request: Request):
    base = SITE.get("website", "https://www.3planet.org").rstrip("/")
    static_pages = [
        ("/", "1.0", "weekly"),
        ("/about", "0.8", "monthly"),
        ("/our-mission", "0.8", "monthly"),
        ("/our-story", "0.7", "monthly"),
        ("/our-values", "0.7", "monthly"),
        ("/our-approach", "0.7", "monthly"),
        ("/our-process", "0.7", "monthly"),
        ("/our-pillars", "0.7", "monthly"),
        ("/our-presence", "0.9", "weekly"),
        ("/services", "0.9", "monthly"),
        ("/gallery", "0.6", "monthly"),
        ("/stories", "0.7", "monthly"),
        ("/reading-corner", "0.8", "weekly"),
        ("/partners", "0.8", "monthly"),
        ("/reports", "0.7", "monthly"),
        ("/contact", "0.8", "monthly"),
    ]
    urls = []
    for path, priority, freq in static_pages:
        urls.append(
            f"  <url>\n"
            f"    <loc>{base}{path}</loc>\n"
            f"    <changefreq>{freq}</changefreq>\n"
            f"    <priority>{priority}</priority>\n"
            f"  </url>"
        )
    for p in PROJECTS:
        urls.append(
            f"  <url>\n"
            f"    <loc>{base}/project/{p['slug']}</loc>\n"
            f"    <changefreq>monthly</changefreq>\n"
            f"    <priority>0.7</priority>\n"
            f"  </url>"
        )
    for b in BLOGS:
        urls.append(
            f"  <url>\n"
            f"    <loc>{base}/blog/{b['slug']}</loc>\n"
            f"    <changefreq>monthly</changefreq>\n"
            f"    <priority>0.6</priority>\n"
            f"  </url>"
        )
    xml = (
        '<?xml version="1.0" encoding="UTF-8"?>\n'
        '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">\n'
        + "\n".join(urls) + "\n"
        "</urlset>"
    )
    return Response(content=xml, media_type="application/xml")


@router.get("/robots.txt", response_class=PlainTextResponse)
async def robots(request: Request):
    base = SITE.get("website", "https://www.3planet.org").rstrip("/")
    return (
        "User-agent: *\n"
        "Allow: /\n"
        "\n"
        f"Sitemap: {base}/sitemap.xml\n"
    )


# --- Pages --------------------------------------------------------------------

@router.get("/", response_class=HTMLResponse)
async def home(request: Request):
    return request.app.state.templates.TemplateResponse("index.html", ctx(
        request,
        services=SERVICES,
        thematic_areas=THEMATIC_AREAS,
        projects=PROJECTS[:6],
        partners=PARTNERS,
        images=IMAGES,
        presence=PRESENCE,
        presence_map=PRESENCE_STATES_MAP,
        state_projects=STATE_PROJECTS,
    ))


@router.get("/about", response_class=HTMLResponse)
async def about(request: Request):
    return request.app.state.templates.TemplateResponse("about.html", ctx(request))


@router.get("/our-mission", response_class=HTMLResponse)
async def our_mission(request: Request):
    return request.app.state.templates.TemplateResponse("our-mission.html", ctx(request))


@router.get("/our-story", response_class=HTMLResponse)
async def our_story(request: Request):
    return request.app.state.templates.TemplateResponse("our-story.html", ctx(request))


@router.get("/our-values", response_class=HTMLResponse)
async def our_values(request: Request):
    return request.app.state.templates.TemplateResponse("our-values.html", ctx(request, values=VALUES))


@router.get("/our-approach", response_class=HTMLResponse)
async def our_approach(request: Request):
    return request.app.state.templates.TemplateResponse("our-approach.html", ctx(request))


@router.get("/our-process", response_class=HTMLResponse)
async def our_process(request: Request):
    return request.app.state.templates.TemplateResponse("our-process.html", ctx(request))


@router.get("/our-pillars", response_class=HTMLResponse)
async def our_pillars(request: Request):
    return request.app.state.templates.TemplateResponse("our-pillars.html", ctx(request, team=TEAM))


@router.get("/our-presence", response_class=HTMLResponse)
async def our_presence(request: Request):
    return request.app.state.templates.TemplateResponse("our-presence.html", ctx(
        request,
        images=IMAGES,
        presence=PRESENCE,
        presence_map=PRESENCE_STATES_MAP,
        state_projects=STATE_PROJECTS,
        projects=PROJECTS,
    ))


@router.get("/services", response_class=HTMLResponse)
async def services(request: Request):
    return request.app.state.templates.TemplateResponse("services.html", ctx(request, services=SERVICES))


@router.get("/projects")
async def projects(request: Request):
    return RedirectResponse(url="/our-presence#projects-section", status_code=301)


@router.get("/project/{slug}", response_class=HTMLResponse)
async def project_detail(request: Request, slug: str):
    project = next((p for p in PROJECTS if p["slug"] == slug), None)
    if not project:
        return request.app.state.templates.TemplateResponse("404.html", ctx(request), status_code=404)
    related = [p for p in PROJECTS if p["slug"] != slug][:3]
    return request.app.state.templates.TemplateResponse("project-detail.html", ctx(
        request, project=project, related=related, external_refs=EXTERNAL_REFERENCES,
    ))


@router.get("/social-media")
async def social_media(request: Request):
    return RedirectResponse(url="/", status_code=301)


@router.get("/gallery", response_class=HTMLResponse)
async def gallery(request: Request):
    return request.app.state.templates.TemplateResponse("gallery.html", ctx(request, gallery=GALLERY_ITEMS))


@router.get("/stories", response_class=HTMLResponse)
async def stories(request: Request):
    return request.app.state.templates.TemplateResponse("stories.html", ctx(request, stories=STORIES))


@router.get("/contact", response_class=HTMLResponse)
async def contact(request: Request):
    return request.app.state.templates.TemplateResponse("contact.html", ctx(request))


@router.post("/contact", response_class=HTMLResponse)
async def contact_submit(
    request: Request,
    name: str = Form(...),
    email: str = Form(...),
    phone: str = Form(""),
    subject: str = Form(""),
    message: str = Form(""),
):
    return request.app.state.templates.TemplateResponse("contact.html", ctx(
        request,
        success=True,
        submitted_name=name,
    ))


@router.get("/reading-corner", response_class=HTMLResponse)
async def reading_corner(request: Request):
    return request.app.state.templates.TemplateResponse("reading-corner.html", ctx(request, blogs=BLOGS))


@router.get("/blog/{slug}", response_class=HTMLResponse)
async def blog_detail(request: Request, slug: str):
    blog = next((b for b in BLOGS if b["slug"] == slug), None)
    if not blog:
        return request.app.state.templates.TemplateResponse("404.html", ctx(request), status_code=404)
    return request.app.state.templates.TemplateResponse("blog-detail.html", ctx(request, blog=blog, blogs=BLOGS))


@router.get("/privacy-policy", response_class=HTMLResponse)
async def privacy_policy(request: Request):
    return request.app.state.templates.TemplateResponse("privacy-policy.html", ctx(request))


@router.get("/terms-conditions", response_class=HTMLResponse)
async def terms_conditions(request: Request):
    return request.app.state.templates.TemplateResponse("terms-conditions.html", ctx(request))


@router.get("/disclaimer", response_class=HTMLResponse)
async def disclaimer(request: Request):
    return request.app.state.templates.TemplateResponse("disclaimer.html", ctx(request))


@router.get("/partners", response_class=HTMLResponse)
async def partners_page(request: Request):
    return request.app.state.templates.TemplateResponse("partners.html", ctx(request, partners=PARTNERS))


@router.get("/reports", response_class=HTMLResponse)
async def reports_page(request: Request):
    return request.app.state.templates.TemplateResponse("reports.html", ctx(request, reports=REPORTS))
