# Author: Ellis Madagan

from http.server import BaseHTTPRequestHandler
import socketserver
import base64
import facecut


class HTTPRequestHandler(BaseHTTPRequestHandler):

    def do_POST(self):
        content_length = int(self.headers['Content-Length'])
        post_data = self.rfile.read(content_length)

        self.send_response(200)
        self.send_header('Content-Type', 'text/html')
        self.end_headers()

        raw_post_body = post_data.decode('utf-8')

        with open('test.jpg', 'wb') as file:
            file.write(base64.b64decode(raw_post_body.split()[-2]))

        facecut.process_image(post_data)


def run():
    httpd = socketserver.TCPServer(('', 1337), HTTPRequestHandler)
    httpd.serve_forever()

run()
