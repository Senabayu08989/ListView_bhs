package com.example.listviewicon

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.ListView
import android.widget.Toast

class MainActivity : AppCompatActivity() {

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        var listview = findViewById<ListView>(R.id.listView)
        var list = mutableListOf<Var>()

        //R.drawable --> menunjukan path dari gambar yg akan digunakan untuk icon
        //Ex : R.drawable.kotlin

        list.add(Var("Kotlin", "desc kotlin", R.drawable.kotlin))
        list.add(Var("Javascript", "JavaScript is an object-based scripting languages", R.drawable.js))
        list.add(Var("PHP", "PHP is and interpreted language i.e, ", R.drawable.php))
        list.add(Var("Ruby", "Ruby is an open-source and fully object-oriented", R.drawable.ruby))
        list.add(Var("Phyton", "Phyton is interpreted scripting", R.drawable.phyton))
        list.add(Var("Rails", "ruby on Rails is server-side web aplication", R.drawable.rails))


        listview.adapter = AdapterListView(this, R.layout.list, list)

        listview.setOnItemClickListener { parent, view, position, id ->

            if (position == 0) {
                Toast.makeText(this@MainActivity, "Anda Memilih Kotlin", Toast.LENGTH_SHORT).show()
            }
            if (position == 1) {
                Toast.makeText(this@MainActivity, "Anda Memilih JavaScript", Toast.LENGTH_SHORT).show()
            }
            if (position == 2) {
                Toast.makeText(this@MainActivity, "Anda Memilih PHP", Toast.LENGTH_SHORT).show()
            }
            if (position == 3) {
                Toast.makeText(this@MainActivity, "Anda Memilih Ruby", Toast.LENGTH_SHORT).show()
            }
            if (position == 4) {
                Toast.makeText(this@MainActivity, "Anda Memilih Phyton", Toast.LENGTH_SHORT).show()

            }
            if (position == 5) {
                Toast.makeText(this@MainActivity, "Anda Memilih Rails", Toast.LENGTH_SHORT).show()
            }

        }
    }
}
