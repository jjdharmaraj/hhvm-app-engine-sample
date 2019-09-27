<?hh //partial

/* 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

require_once(__DIR__.'/../vendor/hh_autoload.hh');

function file_type(): string {
  return "PHP";
}

function app_service(): string {
  return "Google App Engine";
}

function basic_usage_examples_embed_hack(): void {
  $app = <span>{app_service()}</span>;

  echo(<html>
  <head>
    <title>{file_type()} + Composer Sample</title>
  </head>
  <body>
    <h1>Welcome to HHVM!</h1>
    <p>I am a <strong>{file_type()}</strong> file executed by HHVM!!</p>
    <p>Brought to you by {$app}.</p>
    <p>This sample project shows how to include composer as part of your setup.</p>
  </body>
</html>
  );
}
basic_usage_examples_embed_hack();