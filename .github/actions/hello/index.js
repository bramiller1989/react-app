const core = require("@actions/core");
const github = require("@actions/github");

try {
  // throw new Error("some error message");

  core.debug("Debug message from JavaScript");
  core.warning("Waring message from JavaScript");
  core.error("Error message from JavaScript");

  const name = core.getInput("who-to-greet");
  core.setSecret(name);
  console.log(`Hello ${name}`);

  const time = new Date();
  core.setOutput("time", time.toTimeString());

  core.startGroup("Logging GitHub object");
  console.log(JSON.stringify(github, null, "\t"));
  core.endGroup();

  core.exportVariable("HELLO", "hello");
} catch (error) {
  core.setFailed(error.message);
}
