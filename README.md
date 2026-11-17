# Rhein-Main-Project-109

Team project for the Software Engineering Project (TPSE) 2026/27, TU Darmstadt, developed in cooperation with our client (AG). Project: new website for Stochastik Rhein-Main.

## Tools

| Tool | Used for | Where |
|---|---|---|
| GitHub repository | Code, documents, versioning | this repository |
| GitHub Issues | Requirements | Issues tab |
| Meeting minutes | Minutes of all AG and team meetings | [docs/minutes](docs/minutes) |
| WhatsApp group | Team communication | team group chat |
| Google Calendar | Shared calendar (meetings, deadlines) | shared team calendar |
| Time sheet | Time tracking | [Google Sheet](https://docs.google.com/spreadsheets/d/1I71td3llX_O85hG_fcMZ-GQy8n_1aaVdxOQyqAHTu0k/edit?usp=sharing) |
| Team planning doc | Deadlines, task assignment, ideas | [Google Doc](https://docs.google.com/document/d/1_f4eH4t83bvpGbxTf0UQxuZcs1Sivc5dws9W7AwYNws/edit?usp=sharing) |

## Where the TB finds what

- Code and documents: this repository
- Meeting minutes (first AG meeting 11.11.2026): `docs/minutes`
- Requirements: Issues tab
- Time tracking: Google Sheet (see table above)

## Running the code (prototype)

Requirements: Docker Desktop (includes Docker Compose). Git is optional, a ZIP download works too. 

Get the code: `git clone -b feature/running-code https://github.com/gokcecakmak/Rhein-Main-Project-109.git`, then `cd Rhein-Main-Project-109`.
Without git: on GitHub choose the branch feature/running-code, click Code, then Download ZIP, and unzip it.
Once the branch is merged into main, the option `-b feature/running-code` is no longer needed.

Build and start: `docker compose up --build`

Then open http://localhost:8080 in a browser.

Stop: press Ctrl+C in the terminal, then run `docker compose down`.
To reset the database to the sample data, run `docker compose down -v` and start again.

Structure:

- `src/index.php`: seminar list page (PHP 8.4, PDO)
- `db/init.sql`: database table and sample data (MariaDB)
- `Dockerfile`, `docker-compose.yml`: local development environment

The passwords in `docker-compose.yml` are for local development only.
The target environment is the AG's Debian server with PHP 8.4/8.5 and MariaDB.
