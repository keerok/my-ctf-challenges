import tornado.template
import tornado.ioloop
import tornado.web

html_template = '''

'''

class MainHandler(tornado.web.RequestHandler):
  def get(self):
    name = self.get_argument("name","")
    template_data = html_template.replace("FOO",name)
    t = tornado.template.Template(template_data)
    self.write(t.generate(name=name))

application = tornado.web.Application([
  (r"/",MainHandler),
], debug=True,static_path=None,template_path=None)

if __name__ == '__main__':
  application.listen(80)
  tornado.ioloop.IOLoop.instance().start()

