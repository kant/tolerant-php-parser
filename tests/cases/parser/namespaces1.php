<?php
namespace Hello {
    function A() {
        echo "hello";
    }

    function B() {
        namespace\A();
    }

namespace\B();
}