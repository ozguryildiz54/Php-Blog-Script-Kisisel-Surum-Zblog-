(function (zbp) {

	alert("Lütfen F12'ye basın, konsolunuzu açın ve ardından bir açıklama yapın, yorumları test etmek için test yapın!");

	console.log("zbp nesne")
	console.log(zbp);
	if (!zbp) throw new Error('Zbp nesnesi yok, başarıyla oluşturulup oluşturulmadığını kontrol edin.'); // 检测ZBP

	// 挂接口

	// 验证评论
	zbp.plugin.on("comment.verifydata", "ZBPJFExample", function (error, formData) {
		console.log("Veri göndermek için:");
		console.log(formData);
		// formData里的数据可以任意操作

		// 如果出错的话
		//if (1 == 2) {
		//	error.no = 32768; // 给一个错误编码
		//	error.msg = "Z-BlogPHP JavaScript Framework 测试"; // 错误消息
		//}
		// 设置error后，系统将自动报错。
	});

	// 评论发送成功
	zbp.plugin.on("comment.postsuccess", "ZBPJFExample", function (formData, data, textStatus, jqXhr) {
		console.log("Sistem veri döndürür:" + data);
		// 同样，这里除了formData是发送的数据外，另外三项是jQuery ajax的参数，参见jQuery手册，不再赘述。
	});

	// 不过这个可能会无效，因为老版本的主题都是自己重写了RevertComment函数。
	// 另外，通过zbp.plugin.unbind("comment.reply", "system")可以解绑系统的相关事件。
	zbp.plugin.on("comment.reply", "ZBPJFExample", function (id) {
		console.log("Vayy! Kimlik numarasına cevap vermek istiyorsunuz" + id + "Yorumlar ah!");
	});

})(window.zbp);
