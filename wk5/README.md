## Packet Sender
Open source utility to allow **receiving and sending TCP/UDP/SSL (encrypted TCP) packets**

### Packet Sender uses:
- Controlling network-based devices in ways beyond their original apps
- Test automation (using its command line tool and/or hotkeys)
- Testing network APIs (using the built-in TCP, UDP, SSL clients)
- Malware analysis (using the built-in UDP, TCP, SSL servers)
- Troubleshooting secure connections (using SSL ).
- Testing network connectivity/firewalls (by having 2 Packet Senders talk to each other)
- Stress-testing a device (using intense network generator tool)
- Tech support (by sending customers a portable Packet Sender with pre-defined settings and packets)
- Sharing/Saving/Collaboration using the Packet Sender Cloud service.

## Getting started with Packet Sender

### Sending TCP Packets 
Determine local machines network public IPv4 address (whatismyip.com)
![alt text](https://github.com/BnZel/comp3134Winter2020/blob/master/wk5/packetsender_tcp_1.PNG)
![alt text](https://github.com/BnZel/comp3134Winter2020/blob/master/wk5/wireshark_tcp_1.PNG)

### Analyzing TCP Packets
![alt text](https://github.com/BnZel/comp3134Winter2020/blob/master/wk5/analyzing_tcp_packets_1.PNG)

### Sending UDP Packets
![alt text](https://github.com/BnZel/comp3134Winter2020/blob/master/wk5/packetsender_udp_1.PNG)
![alt text](https://github.com/BnZel/comp3134Winter2020/blob/master/wk5/wireshark_udp_1.PNG)

### Analyzing UDP Packets
![alt text](https://github.com/BnZel/comp3134Winter2020/blob/master/wk5/packetsender_udp_3.PNG)

### Deeper look at TCP Packets
![alt text](https://github.com/BnZel/comp3134Winter2020/blob/master/wk5/wireshark_advanced_tcp_1.PNG)
![alt text](https://github.com/BnZel/comp3134Winter2020/blob/master/wk5/wireshark_advanced_tcp_2.PNG)

### Simplified Firewall Rules: UFW
**Uncomplicated Fire Wall (UFW)**
- Simplified firewall tool
- Allow you to easily turn on/off basic services 

### Using Uncomplicated Fire Wall

#### View firewall rules
```ufw status```

#### View which applications are using which ports
``` ufw app list```

## Changing the SSH Port
- Connect to remote server (DigitalOcean)
- Open the file /etc/ssh/sshd_config (using the **sudo** prefix for admin privileges)
- Within the file, replace **Port 22 to 2222** (REMEMBER TO CHANGE IT BACK AFTER)
- Add port to server firewall 
- Restart sshd service ( **service {service_name} {action}** )
- Open a new GitBash window and login using (**ssh root@your-ip-address -p PORT-NUMBER**)

![alt text](https://github.com/BnZel/comp3134Winter2020/blob/master/wk5/ssh_port_change_1.PNG)


