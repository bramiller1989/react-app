#!/bin/sh -l

echo "::debug ::Debug message from Docker"
echo "::warning ::Warning message from Docker"
echo "::error ::Error message from Docker"

echo "::add-mask::$1"
echo "Hello $1"
time=$(date)
echo "::set-output name=time::$time"

echo "::group::Some expandable logs"
echo 'some stuff'
echo 'some stuff'
echo 'some stuff'
echo 'some stuff'
echo 'some stuff'
echo "::endgroup::"

echo "::set-env name=HELLO::"