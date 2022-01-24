<?php

/**
 * This alias shims the fully namespaced Compatibility\Kiss\View back to its original name, \View so
 * that non-upgraded modules can still work the same way. You can remove this when all modules inherit the Laravel
 * HTTP Controller - mosen.
 */
class_alias('Compatibility\Kiss\View', '\View');
