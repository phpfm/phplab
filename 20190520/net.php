<?php
interface some {}
class ban implements some {}
print_r(class_implements(new ban));