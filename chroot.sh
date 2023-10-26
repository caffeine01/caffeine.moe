#script for when i fucked up my pc lol
mount /dev/sdb2 /mnt
mount /dev/sdb1 /mnt/boot
cd /mnt 
mount -t proc proc /mnt/proc
mount -t sysfs sys /mnt/sys
mount -o bind /dev /mnt/dev
mount -o bind /run /mnt/run
mount -t devpts pts /mnt/dev/pts/
cp /etc/resolv.conf /mnt/etc/resolv.conf
chroot /mnt /bin/bash
