<?php

namespace YunusEmreBaloglu\QuickDeploye\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class QuickDeployeController extends BaseController
{
  /**
   * Deploy the application using the provided token.
   *
   * @param string $token
   * @return \Illuminate\Http\Response
   */
  public function deploye($token)
  {
    // Verify the provided token
    if (config('quick-deploye.token') !== $token) {
      abort(403);
    }

    // Change the working directory to the base path of the Laravel application
    chdir(base_path());

    // Execute each configured command
    foreach (explode(',', config('quick-deploye.commands')) as $command) {
      exec($command, $output, $result);

      // Check if the command execution was successful
      if ($result !== 0) {
        return response()->json([
          "message" => "Deployment failed",
          "failed_data" => [
            "command" => $command,
            "output" => $output,
            "result" => $result
          ]
        ], 500);
      }
    }

    // If all commands were executed successfully, return a success response
    return response()->json(['message' => "Deployment successful"]);
  }
}
