# Review Checklist

## When and who
- Every pull request gets reviewed before it is merged into `main`.
- The reviewer comes from another pair. The rotation: Database reviews Frontend, Frontend reviews Backend, Backend reviews Database.
- Reviews happen in the pull request, so they stay traceable: the reviewer leaves comments there and approves when everything is fine. The authors fix the issues, then the PR is merged.

## Checklist
- [ ] It runs locally with Docker (`docker compose up --build`) and the page opens without errors.
- [ ] The author tested the change by hand, and the PR description says how to test it.
- [ ] Names of files, variables, tables and columns are readable.
- [ ] No debug output is left (`var_dump`, `print_r`, test `echo`, commented-out code).
- [ ] No real passwords, personal data or client data in the code. Clearly labeled example values for local testing are fine.
- [ ] User input is never put directly into SQL (use prepared statements), and output is escaped.
- [ ] The PR only contains changes that belong to its topic.
- [ ] The PR description explains what changed and why.