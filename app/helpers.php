if (! function_exists('removePublicPath')) {
    function removePublicPath($path)
    {
        return str_replace('public/', '', $path);
    }
}