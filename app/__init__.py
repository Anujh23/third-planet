from fastapi import FastAPI, Request
from fastapi.middleware.gzip import GZipMiddleware
from fastapi.staticfiles import StaticFiles
from fastapi.templating import Jinja2Templates
from starlette.middleware.base import BaseHTTPMiddleware
from pathlib import Path

from app.config import SITE
from app.routes import router

BASE_DIR = Path(__file__).resolve().parent


class SecurityHeadersMiddleware(BaseHTTPMiddleware):
    async def dispatch(self, request, call_next):
        response = await call_next(request)
        response.headers["X-Content-Type-Options"] = "nosniff"
        response.headers["X-Frame-Options"] = "SAMEORIGIN"
        response.headers["Referrer-Policy"] = "strict-origin-when-cross-origin"
        response.headers["Permissions-Policy"] = "geolocation=(), camera=(), microphone=()"
        return response


def create_app() -> FastAPI:
    application = FastAPI(title="Third Planet Foundation")

    application.add_middleware(GZipMiddleware, minimum_size=1000)
    application.add_middleware(SecurityHeadersMiddleware)

    application.mount("/static", StaticFiles(directory=BASE_DIR / "static"), name="static")

    templates = Jinja2Templates(directory=BASE_DIR / "templates")
    application.state.templates = templates

    application.include_router(router)

    @application.exception_handler(404)
    async def not_found(request: Request, exc):
        return templates.TemplateResponse(
            "404.html",
            {"request": request, "site": SITE},
            status_code=404,
        )

    return application


app = create_app()
