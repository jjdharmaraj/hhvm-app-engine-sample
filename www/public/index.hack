// Copyright 2019 J.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

$run_time= 'HHVM';

<<__EntryPoint>>
function main(): noreturn {
  $html = "<!DOCTYPE html>
<html>
  <head>
    <title>Hello World!</title>
  </head>
  <body>
    <h1>Welcome to $run_time!</h1>
    <p>I am a Hack file executed by $run_time</p>
    <p>Brought to you by Google App Engine.</p>
  </body>
</html>";
  print($html);
  exit(0);
}