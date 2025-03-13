from flask import Flask, jsonify

app = Flask(__name__)

@app.route('/libraries', methods=['GET'])
def get_libraries():
    libraries = [
        {"id": 1, "name": "NumPy", "link": "https://pypi.org/project/numpy/", "description": "Sayısal hesaplamalar için."},
        {"id": 2, "name": "Pandas", "link": "https://pypi.org/project/pandas/", "description": "Veri analizi ve manipülasyonu için."},
        {"id": 3, "name": "Matplotlib", "link": "https://pypi.org/project/matplotlib/", "description": "Veri görselleştirme için."},
        {"id": 4, "name": "Scikit-learn", "link": "https://pypi.org/project/scikit-learn/", "description": "Makine öğrenimi için."},
        {"id": 5, "name": "Symfony", "link": "https://packagist.org/packages/symfony/symfony", "description": "PHP için bir framework."},
        {"id": 6, "name": "Laravel", "link": "https://packagist.org/packages/laravel/laravel", "description": "Modern web uygulamaları için bir framework."}
    ]
    return jsonify(libraries)

if __name__ == '__main__':
    app.run(debug=True) 