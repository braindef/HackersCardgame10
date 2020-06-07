#!/bin/bash

for i in $(find $1 -name '*.svg'); do sed -i 's/https:\/\/0x8.ch\/HackersCardgame9/https:\/\/0x8.ch\/HackersCardgame10/g' "$i"; done
