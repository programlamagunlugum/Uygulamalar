using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace radyouygulaması
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            axWindowsMediaPlayer1.URL = "http://fenomenclubbin.listenfenomen.com/fenomenclubbin/128/icecast.audio";
        }

        private void button2_Click(object sender, EventArgs e)
        {
            axWindowsMediaPlayer1.URL = "https://playerservices.streamtheworld.com/api/livestream-redirect/JOY_FM.mp3  ";
        }

        private void button3_Click(object sender, EventArgs e)
        {
            axWindowsMediaPlayer1.URL = "http://kralwmp.radyotvonline.com:80/;  ";
        }

        private void button4_Click(object sender, EventArgs e)
        {
            axWindowsMediaPlayer1.URL = " https://playerservices.streamtheworld.com/api/livestream-redirect/METRO_FM.mp3  ";
        }

        private void button5_Click(object sender, EventArgs e)
        {
            axWindowsMediaPlayer1.URL = "  http://37.59.205.232:9406/stream  ";
        }

        private void button6_Click(object sender, EventArgs e)
        {
            axWindowsMediaPlayer1.URL = " http://shoutcast.radyogrup.com:2020/stream/1;  ";
        }

        private void button7_Click(object sender, EventArgs e)
        {
            axWindowsMediaPlayer1.URL = "https://listen.powerapp.com.tr/powerdance/abr/powerdance/128/playlist.m3u8   ";
        }

        private void button8_Click(object sender, EventArgs e)
        {
            axWindowsMediaPlayer1.URL = " https://playerservices.streamtheworld.com/api/livestream-redirect/VIRGIN_RADIO.mp3   ";
        }
    }
}



































































