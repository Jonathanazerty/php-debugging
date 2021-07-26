# PHP installation

Like any good recipe, we start with the ingredients.
What do we actually need in our installation?

- PHP
- Apache
- MySQL

Curious why we need more than just PHP? [Discover it in the PHP basics.](PHP-basics.md)

## Step 1: installing

### Option 1 - Straight to the target: all-in tools like MAMP

Some tools provide all of these services in one installation.
If you're already familiar with one, feel free to use it.
If not, these are some recommendations:

- [MAMP (Mac / Windows)](https://www.mamp.info/en/downloads/)
- [AMPPS (Linux)](https://ampps.com/)
- [XAMPP (Linux)](https://www.apachefriends.org/faq_linux.html)

### Option 2 - A hobbly bobbly road: manual install

If you need full control at any moment (e.g. on a server), a manual installation could be the thing to do.
It's different for every OS (operating system) and can be a tricky thing to do.
For now, we'll roll with option 1 - just remember that a manual install is a possibility.

## Step 2: configuration

You will be able to assign a webroot.
This is the root location of your local server: everything inside can be loaded as website and use PHP.
Paths will then start here. Example: localhost:8888/your-exercise/index.php