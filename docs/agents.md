# AI assistance

The editable skill is [`skills/ui-awesome-html-contracts/SKILL.md`](../skills/ui-awesome-html-contracts/SKILL.md).
It guides interface selection, immutable implementations, encoded versus raw content, and optional form capabilities.
The documentation site imports this source unchanged; generated copies are not edited separately.

## Install in an application

### Automatic Composer installation

Use the [Composer setup guide](https://yii2-framework.github.io/docs/project/ai-agents/#composer-installation)
to configure `llm/skills` in the application. Trust `ui-awesome/html-contracts` explicitly in
`dependencies.composer.trusted` and enable `auto-sync` in `skills.json` if automatic updates are wanted.
The installed package must contain the bundle declared by `extra.skills.source`.

```bash
composer install
composer skills:show
```

With automatic synchronization disabled, run `composer skills:update` explicitly. Package installation alone does not
make a skill in `vendor/` discoverable from the application root. Metadata alone does not install the synchronizer.

### Optional npx installation

Alternatively, from the application root, list and install the complete bundle with the pinned optional installer:

```bash
npx skills@1.7.2 add /absolute/path/to/html-contracts --list
npx skills@1.7.2 add /absolute/path/to/html-contracts \
  --skill ui-awesome-html-contracts --agent claude-code codex opencode
```

The path may point to a checkout or `vendor/ui-awesome/html-contracts` when that installed version includes the skill.
Use a GitHub source only after listing confirms that its revision contains the bundle. Linked installations track
their source; copied installations must be refreshed after updates.

## Verify discovery and behavior

This source checkout links `.agents/skills/ui-awesome-html-contracts` and `.claude/skills/ui-awesome-html-contracts` to
`skills/ui-awesome-html-contracts`. Codex and OpenCode use the first discovery path; Claude Code uses the second.
Both links share the canonical source rather than maintaining separate client copies. The discovery directories are
excluded from distribution archives; consumers install the canonical bundle in their own application as described above.

For manual installation, copy or link the whole `ui-awesome-html-contracts` directory to the project's client skill
location: `.claude/skills/` for Claude Code or `.agents/skills/` for Codex and OpenCode. Do not maintain divergent
client-specific instruction copies.

1. Verify that the installed directory contains `SKILL.md` and valid frontmatter.
2. Open a fresh client session at the application root and check its skill list.
3. Invoke `/ui-awesome-html-contracts` in Claude Code, `$ui-awesome-html-contracts` in Codex, or ask OpenCode to load it.
4. Confirm that the skill body was loaded, then test the generated PHP against the installed package.

Installer listing proves installer discovery, not client activation. Reading the file directly is useful but is not
proof of native activation. Model evaluations and maintainer fixtures are private and are not part of the bundle.

## Example prompts

After native activation, use a task such as the examples below. In Codex, start with `$ui-awesome-html-contracts`;
in Claude Code, invoke `/ui-awesome-html-contracts`. In clients with a native skill tool, ask it to load
`ui-awesome-html-contracts` before the task. These prompts do not replace installation or prove activation.

### Implement immutable attributes

```text
Implement a small AttributesInterface consumer. Bulk updates must preserve unspecified attributes, null must remove a key, and returned instances must not mutate the original. Verify the complete parameter signatures and the behavior with executable PHP assertions.
```

### Compose and replace content

```text
Implement a small ClearableContentInterface consumer. Test encoded text versus trusted raw HTML, a backed enum with integer zero, a pure enum, and clearContent()->content(). Preserve unrelated state and the original instance.
```

### Check form-control capabilities

```text
Implement a minimal form-control consumer and a value-capable variant. Do not assume FormControlInterface provides value() or placeholder(). Match the complete ValueInterface union, test integer zero and null removal, and reject unsupported capabilities explicitly.
```

For an automatic-selection check, repeat a relevant task without naming the skill and compare it with an unrelated
task. Record actual loading evidence and executable results separately; a correct answer alone is not proof of activation.

[Back to documentation](../README.md#documentation)
