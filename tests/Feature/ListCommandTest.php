<?php

it('lists available commands', function () {
    $this->artisan('list')->assertExitCode(0);
});
