# Author: Ellis Madagan

from http.server import BaseHTTPRequestHandler, HTTPServer
import socketserver


class HTTPRequestHandler(BaseHTTPRequestHandler):

    def do_POST(self):
        content_length = int(self.headers['Content-Length'])
        post_data = self.rfile.read(content_length)
        print(post_data)

        self.send_response(200)
        self.send_header('Content-type', 'text/html')
        self.end_headers()


def run(server_class=HTTPServer, handler_class=HTTPRequestHandler):
    httpd = socketserver.TCPServer(('', 1337), HTTPRequestHandler)
    httpd.serve_forever()

run()
