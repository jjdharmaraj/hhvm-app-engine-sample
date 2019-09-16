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

function third_party_sample(): string{
  $uuid_generator = new \Usox\HackUuidGen\UuidGenerator();
  $uuid = $uuid_generator->generate();
  return $uuid;
}
function main(): noreturn {
  \Facebook\AutoloadMap\initialize();

  $uuid = third_party_sample();
  $file_type = "PHP";

  $html = "<!DOCTYPE html>
<html>
  <head>
    <title>$file_type + Composer Sample</title>
  </head>
  <body>
    <h1>Welcome to HHVM!</h1>
    <p>I am a $file_type file executed by HHVM</p>
    <p>Brought to you by Google App Engine.</p>
    <p>This sample project shows how to include composer as part of your setup.</p>
    <p>This UUID: ($uuid) is brought to you by <a href=\"https://github.com/usox/hack-uuid-generator\" target=\"_blank\">https://github.com/usox/hack-uuid-generator</a></p>
  </body>
</html>";
  print($html);
  exit(0);
}
main();