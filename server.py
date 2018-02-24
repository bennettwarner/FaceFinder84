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
    with socketserver.TCPServer(('', 1337), HTTPRequestHandler) as httpd:
        print('serving at port', 1337)
        httpd.serve_forever()

if __name__ == '__main__':
    run()
