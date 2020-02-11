from flask import Flask, render_template, request, redirect, url_for
import mysql.connector
app = Flask(__name__)

mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    passwd="",
    port='3307',
    database="login_db"
)




@app.route('/')
def showData():
    mycursor = mydb.cursor()
    mycursor.execute("SELECT * FROM login")
    myresult = mycursor.fetchall()
    return render_template('index.html',data=myresult)

@app.route('/addform')
def showAddform():
    return render_template('add.html')

@app.route('/addData',methods=['POST'])
def addData():
    if request.method == "POST":
        username = request.form['user']
        password = request.form['pass']
        name = request.form['name']
        level = request.form['level']
        mycursor = mydb.cursor()
        sql = "INSERT INTO login (username,password,name,level) values (%s,%s,%s,%s)"
        mycursor.execute(sql,(username,password,name,level))
        mydb.commit()
        return redirect(url_for('showData'))

@app.route('/delete/<string:id_data>',methods=['GET'])
def delete(id_data):
    mycursor = mydb.cursor()
    sql = "DELETE FROM login WHERE id  = %s"
    mycursor.execute(sql,(id_data,))
    mydb.commit()
    return redirect(url_for('showData'))

@app.route('/update',methods=['POST'])
def updateData():
    if request.method == "POST":
        id = request.form['id']
        username = request.form['user']
        password = request.form['pass']
        name = request.form['name']
        level = request.form['level']
        mycursor = mydb.cursor()
        sql = "UPDATE login SET username = %s ,password = %s ,name = %s ,level = %s WHERE id = %s"
        mycursor.execute(sql,(username,password,name,level,id))
        mydb.commit()
        return redirect(url_for('showData'))


if __name__ == "__main__":
    app.run(debug=True)