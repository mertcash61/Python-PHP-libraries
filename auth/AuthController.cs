using Microsoft.AspNetCore.Mvc;

namespace YourNamespace.Controllers
{
    public class AuthController : Controller
    {
        // Giriş sayfası
        public IActionResult Login()
        {
            return View();
        }

        // Giriş işlemi
        [HttpPost]
        public IActionResult Login(string username, string password)
        {
            // Kullanıcı doğrulama işlemleri
            if (IsValidUser(username, password))
            {
                // Başarılı giriş
                return RedirectToAction("Index", "Home");
            }
            else
            {
                // Hatalı giriş
                ViewBag.ErrorMessage = "Kullanıcı adı veya şifre hatalı.";
                return View();
            }
        }

        private bool IsValidUser(string username, string password)
        {
            // Kullanıcı doğrulama mantığı
            return username == "admin" && password == "password"; // Örnek
        }
    }
}