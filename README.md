# snowboard-ctf
### SUMMARY:
The Lazy Admin's Board Shop is a vulnerable web application that was designed to help new testers recognize common web application vulnerabilities. There is also an optional flag that can be captured located somewhere on the target machine.

### INSTALLATION:
1. Import the image into your favorite virtualization software. 
   (We recommend for VirtualBox for compatibility reasons.)
2. Make sure that you modify the network settings so that the image network is shared with your host machine (Host-Only Adapter).
3. Once booted, the image will prompt you to login. You do not need to login.
4. Take note of the IP Address in the Bitnami banner, and navigate to the following URL (this is your target) on your host machine:
   http://[target_IP]/snowboard-ctf
5. You do NOT have to interact with image once it's loaded. 
   Pretend like it's a web server in the client's environment.

### ASSIGNMENT:
1. Discover as many web vulnerabilities as you can.
2. Treat this like a real penetration test! Make sure that your descriptions are verbose enough so that anyone with a technical background can replicate the issue.
3. Although not required, feel free to perform infrastructure testing (and use tools such as Kali) to attack this machine as well.
   Bonus: See if you can find the flag located in the target machine!

### TROUBLESHOOTING:
1. You may need to enable virtualization in your BIOS if you've never configured a virtual machine on your laptop.
2. If you're having issues starting the image, try to perform a "headless start".
3. If you're having issues importing this image into VMWare, please use VirtualBox instead.
4. If you're having network issues, you may need to open up the Host Network Manager and create a new network. Make sure that the DHCP Server is enabled so that it can assign an IP Address to your VM on startup.
