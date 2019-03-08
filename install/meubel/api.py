#Dit is de product service dei RESTful is.

from flask import Flask
from flask_restful import Resource, Api

app = Flask(__name__)
api = Api(app)

class Meubel(Resource):
    def get(self):
        return {
            'meubels': [
                'Stoel',
                'Eiken Tafel',
                'Houten kast',
                '2 persoonsbed',
                'Glazen deur',
                'Nachtkastje',
                'Bureau',
                'schap']        
        }

api.add_resource(Meubel, '/')

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80, debug=True)
