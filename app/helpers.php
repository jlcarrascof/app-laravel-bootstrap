<?php

function setActive()
{
    return request()->routeIs('about') ? 'active' : '';
}
