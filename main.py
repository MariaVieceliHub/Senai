from flask import Flask, render_template, request
import os 

# Defina a pasta onde estão os arquivos HTML (neste caso, a raiz do projeto)
template_dir = os.path.abspath(os.path.dirname(__file__))
app = Flask(__name__, template_folder=template_dir)

