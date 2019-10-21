package com.example.listviewicon


import android.content.Context
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ArrayAdapter
import android.widget.ImageView
import android.widget.TextView

class AdapterListView (var Vcontext: Context, var resource:Int, var items:List<Var>)
    :ArrayAdapter<Var>(Vcontext,resource,items){
    override fun getView(position: Int, convertView: View?, parent: ViewGroup): View {
        val layoutInflater:LayoutInflater = LayoutInflater.from(Vcontext)

        val view:View = layoutInflater.inflate(resource , null)
        val imageView:ImageView = view.findViewById(R.id.icon_bhs)
        val textView:TextView = view.findViewById(R.id.languages)
        val textView1:TextView= view.findViewById(R.id.desc)

        var mItems:Var = items [position]
        imageView.setImageDrawable(Vcontext.resources.getDrawable(mItems.photo))

        textView.text = mItems.languages
        textView1.text = mItems.desc




        return view
    }


}
