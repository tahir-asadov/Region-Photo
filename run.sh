gnome-terminal --tab --title="Docker Compose" -- bash -c "sudo docker-compose up; exec bash"
gnome-terminal --tab --title="MIX" -- bash -c "npm run watch; exec bash"
gnome-terminal --tab --title="Browser Sync" -- bash -c "browser-sync start --proxy 127.0.0.1:8000 --files \'resources\' \'public\' \'routes\' --port 7000; exec bash;"
gnome-terminal --tab --title="Laravel Server" -- bash -c "sudo docker exec -it rp_rpa_1 bash; exec bash"
