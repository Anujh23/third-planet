# Third Planet Foundation

Official website for **Third Planet Foundation** (TPF) — a national CSR implementation organisation registered as a Section 8 not-for-profit company, working across 20+ Indian states since 2012.

## Tech Stack

- **Backend**: Python 3.12 + FastAPI
- **Templating**: Jinja2
- **Frontend**: Vanilla CSS + JavaScript
- **Fonts**: Inter (body) + Playfair Display (headings)
- **Icons**: Font Awesome 4.7

## Setup

```bash
# Create virtual environment
python -m venv venv
source venv/bin/activate  # Linux/Mac
venv\Scripts\activate     # Windows

# Install dependencies
pip install -r requirements.txt

# Run development server
python run.py
```

The site will be available at `http://127.0.0.1:8080`.

## Project Structure

```
third-planet/
├── app/
│   ├── __init__.py          # FastAPI app factory
│   ├── config.py            # Site configuration (URLs, social links, images)
│   ├── routes.py            # All page routes, sitemap, robots.txt
│   ├── data/                # Static data (services, projects, partners, etc.)
│   ├── templates/           # Jinja2 HTML templates
│   └── static/
│       ├── css/style.css    # Main stylesheet
│       ├── js/main.js       # Client-side interactions
│       └── img/             # Images (stock/, gallery/, logos)
├── .claude/
│   └── agents/              # AI agent definitions for development workflow
├── requirements.txt
├── run.py                   # Development server entry point
└── README.md
```

## Pages

| Route | Description |
|-------|-------------|
| `/` | Homepage with hero, stats, programmes, projects, partners |
| `/about` | About the organisation |
| `/our-mission` | Mission and vision |
| `/our-story` | Timeline and history |
| `/our-values` | Core values |
| `/our-pillars` | Leadership and team |
| `/services` | CSR service offerings |
| `/our-approach` | Methodology |
| `/our-process` | End-to-end implementation process |
| `/our-presence` | Interactive India map with state-wise projects |
| `/stories` | Impact stories from the field |
| `/gallery` | Photo gallery with category filters |
| `/reading-corner` | Blog / field diaries |
| `/partners` | Corporate partner showcase |
| `/reports` | Annual reports and transparency |
| `/contact` | Contact form and office details |

## Brand Colors

| Color | Hex | Usage |
|-------|-----|-------|
| Primary Green | `#4A7C59` | Brand identity, CTAs, links |
| Accent Gold | `#C9915C` | Highlights, warmth, premium feel |
| Dark | `#1a2332` | Headers, footer, dark backgrounds |

## License

All rights reserved. Third Planet Foundation.
