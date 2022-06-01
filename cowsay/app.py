from flask import Flask, request
from fortune import fortune
from cowsay import get_output_string, char_names


app = Flask(__name__)


@app.route("/say", methods=["GET"])
def says():
    character = request.args.get('char', 'cow')
    if character in char_names:
        return get_output_string(character, fortune())
    else:
        name_list = ', '.join(char_names)
        return f"Invalid character name! Valid character are {name_list}"
