<?php

it('has novo page', function () {
    $response = $this->get('/novo');

    $response->assertStatus(200);
});
