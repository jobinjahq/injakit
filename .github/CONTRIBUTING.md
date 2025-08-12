# Contribution Guide

## Bug Reports
- You may open an issue for bug reports, but we strongly recommend opening a pull request instead. A UI kit is not complex in terms of software complexity, so you can easily fix issues—especially with the current state of AI.
- If, for any reason, you decide to open an issue instead of a PR, it must have a clear title and description, along with steps to reproduce and details about your environment. Since this is a UI library, attaching screenshots is highly recommended if relevant. If the issue is specific to a particular device or browser, that information will be very helpful.
- Bug reports will be addressed based on priority and impact. Do not expect immediate activity, and we do not guarantee resolution, but we will make an effort to address them.

## Support Questions
- The discussion board can be used for new ideas, support questions, and more. However, do not expect an immediate response.

## Which Branch?
We follow the same branching approach as Laravel for PRs.

- **Minor features** that are fully backward-compatible and do not change UI styling should be sent to the latest maintenance branch (e.g., 0.x, 1.x, 2.x, 3.x — latest here). The default branch on GitHub always points to the latest stable version.
- **Major new features** that may introduce new styling, or add/remove public interfaces, must be sent to the `main` branch, which is our reference for future releases. All active development for the next major release happens on `main`.
  You may add new components to minor versions, but those changes must not modify public interfaces or styling. Since we are a UI library, changes directly affect end users. We expect developers to update their core repo with minor versions (e.g., 1.2 → 1.3 → 1.4) without explicitly locking the version manager to patch versions. To support this, we aim to keep minor updates from breaking public interfaces or styling, but we do not guarantee it.
- We only provide support for the latest stable version (default branch on GitHub). Other versions are only considered for security vulnerability fixes.
- **Patches** are always applied to the latest minor version. For example, if you find an issue in 1.3.1 and the last stable release in that major version is 1.6.1, the patch will result in 1.6.2, not 1.3.2.
  We strongly recommend allowing minor upgrades in your version requirements (our installation docs are designed for this). Developing a referenced UI library without this policy is impractical, as each patch would require testing and upgrading dozens of branches. If this approach does not work for you, you may:
  - Fork the repo at a specific version, or
  - Publish (copy/paste) components and files into your own codebase (note: this detaches you from future upgrades, which is one of this library’s strengths).

## Security Vulnerabilities
- For critical vulnerabilities, send an email to **reza@injakit.com**.
- For all other cases, open an issue — or better, submit a PR.
- We aim to address security vulnerabilities as quickly as possible, but we do not guarantee immediate fixes.

## Coding Style
- **PHP:** Default Pint configuration.
- **JavaScript:** Configured Prettier.
- **Blade:** Prettier Blade plugin.

## PHPDoc and Doc Blocks
- Add PHPDoc or Doc blocks only when they provide relevant metadata or type information.
- Always use types wherever possible.
- Do not comment every line of code. Only comment on complex logic, non-obvious tricks, or abstract approaches that need explanation.

## Code of Conduct
Our code of conduct is based on providing direct feedback without unnecessary political correctness. We respect each other, but the code is an artificial creation, and our feedback focuses on what works for the product.

Injakit is an **opinionated** UI library with continuously upgradable UI elements. For example, if you had a Button component in 2015, by 2025 it would be upgraded and modernized through contributor effort. General UI components like Buttons evolve over time. When you update to a major version, you should expect some components to have a new look.
New concepts are added alongside existing ones if the old ones remain relevant. For instance, if we create a new navigation component, we will keep the old one if it is still a valid option.
We provide version-by-version upgrade guides so your project can evolve without becoming detached from the main design. If you do not want this, you should either fork the project or maintain your own tailored version (by publishing views, JS files, and styles).

That being said, contributions are welcome — but do not expect public voting on what gets merged.

Any political or social discussions in public forums (discussion boards, issue tracker, PRs) will be banned.
Only UI library–related discussions are allowed in these spaces.
