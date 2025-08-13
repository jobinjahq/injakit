
# Release 0.0.6 (2025-08-13)

### Use globe matching for npm publish workflow (#8)
#### Breaking Changes

- No breaking changes

#### New Features

- No new features

#### Bug Fixes

- Fixes the issue with `npm-publish.yml` workflow not getting triggered
on new tags, seems github uses glob matching and we were using regex.


---



# Release 0.0.5 (2025-08-13)

### Use better naming (#7)
- Try to trigger and NPM auto release 
- Use better naming for PHPStan workflow


---



# Release 0.0.4 (2025-08-13)

### Add blade MD support for vscode (#6)
#### Breaking Changes

- No breaking changes

#### New Features

- No new features

#### Bug Fixes

- No bug fixes
### Automatically publish NPM with git version release tags (#5)
- Use workflow template for publishing to NPM after the tags created in form x.x.x.*
- We include version field in package.json, the workflow template for publishing just changes tag and publishes. 
- An NPM token is required for publish to happen which must be set in repository secrets by name `NPM_TOKEN` in our repo.


---



# Release 0.0.3 (2025-08-12)

### Allow .vscode but ignore .vscode/launch.json (#4)
This release only removes `.vscode` from `.gitignore` because the
formatting setup needed for a front-end package is hard, this way
developers can easily contribute in terms of setting up proper
formatting on their machine.

#### Breaking Changes
- No breaking changes

#### New Features
- No new features

#### Bug Fixes
- No bug fixes


---



# Release 0.0.2 (2025-08-12)

### Fix pr template large headers (#3)
#### Breaking Changes
- No breaking changes

#### New Features
- No new features

#### Bug Fixes
- Use smaller headers in PR template
- Update bad looking changelog
----

---


# Release 0.0.1 (2025-08-12)

### Fix label driven release from accepted PR (#2)

#### Breaking Changes

- No breaking changes

#### New Features

- No new features

#### Bug Fixes

- Fix label-driven release from accepted PR

### Test workflows are working (#1)

#### Breaking Changes

- No breaking changes

#### New Features

- No new features

#### Bug Fixes

- No bug fixes

> Nothing this was an initial release to check workflows are working

### Initial commit

---
