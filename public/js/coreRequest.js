(function($) {

   /**
    * 画面遷移.
    * Formを生成し、引数でわたされたパラメーターをhiddenタグとして設定し
    * 指定されたURLへsubmitします。
    * paramsに指定する値は単一階層のJSONオブジェクトとし
    * 要素の数だけ以下のhiddenタグを生成し、submitします。
    * <input type="hidden" name="JSONオブジェクト.キー" value="JSONオブジェクト.値"/>
    * ====================================================================
    * @url 遷移先URL
    * @params リクエストパラメーター
    */
    $.transitionTo = function(url, params) {
        var form = $('<form method="post" />').attr('action', url);
        if(params){
          $.each(params, function(key, value) {
            if (value) {
              $('<input>').attr({
                type: 'hidden',
                name: key,
                value: value
              }).appendTo(form);
            }
          });
        }
        form.appendTo('body').submit();
    };
    
    /**
     * ajax非同期通信処理
     * 利用用途：フォームを利用していない箇所に対して、Ajaxリクエストを送りたい場合に利用します。
     *         この関数はjQuery.ajaxを直接コールしています。
     * ====================================================================
     * @param  {HTMLForm} form            フォーム
     * @param  {Object} sucessCallback    成功時コールバック関数(省略可)
     * @param  {Object} errorCallback     失敗時コールバック関数(省略可)
     * @param  {Object} beforeSend        AJAXによりリクエストが送信される前に呼ばれるAjax Event関数(省略可)
     * @param  {Object} completeCallback  AJAX通信完了時に呼ばれるコールバック関数(省略可)
     */
    $.fn.ajaxSend = function(successCallback, errorCallback, beforeSend, completeCallback) {
        var url =  $(this).attr('action');
        var data = $(this).serializeForm();
        $.ajaxSend(url, data, successCallback, errorCallback, beforeSend, completeCallback);
    }
    
    /**
     * ajax非同期通信処理
     * 利用用途：フォームを利用していない箇所に対して、Ajaxリクエストを送りたい場合に利用します。
     *         この関数はjQuery.ajaxを直接コールしています。
     * ====================================================================
     * @param  {String} url               処理URL
     * @param  {Object} data              引数オブジェクト
     * @param  {Object} sucessCallback    成功時コールバック関数(省略可)
     * @param  {Object} errorCallback     失敗時コールバック関数(省略可)
     * @param  {Object} beforeSend        AJAXによりリクエストが送信される前に呼ばれるAjax Event関数(省略可)
     * @param  {Object} completeCallback  AJAX通信完了時に呼ばれるコールバック関数(省略可)
     */
    $.ajaxSend = function(url, data, successCallback, errorCallback, beforeSend, completeCallback) {
        var ajaxOption = {};
        ajaxOption['type'] = 'POST';
        ajaxOption['dataType'] = 'json';
        ajaxOption['cache'] = false;
        ajaxOption['async'] = true;
        ajaxOption['data'] = data;
        ajaxOption['url'] = url;
        ajaxOption['beforeSend'] = function(jqXHR, settings){
        	$('.overlay').show();
            if(typeof beforeSend === 'function'){
                beforeSend(jqXHR, this);
            }
        };
        ajaxOption['success'] = function(response, status, jqXHR){
            if(typeof successCallback === 'function'){
            	successCallback(response, this, status, jqXHR);
            }
            return false;
        };
        ajaxOption['error'] = function(jqXHR, txtStatus, errorThrown){
            if(typeof errorCallback === 'function'){
                errorCallback(jqXHR, this);
                return false;
            }
            return false;
        };
        ajaxOption['complete'] = function(jqXHR, textStatus){
        	$('.overlay').hide();
            if(typeof completeCallback === 'function'){
                completeCallback(jqXHR, this);
                return false;
            }
            return false;
        };
        $.ajax(ajaxOption);
        return true;
    };
    
    $.fn.serializeForm = function() {
      var o = {};
      var a = this.serializeArray();
      $.each(a, function() {
          if (o[this.name]) {
              if (!o[this.name].push) {
                  o[this.name] = [o[this.name]];
              }
              o[this.name].push(this.value || undefined);
          } else {
              o[this.name] = this.value || undefined;
          }
      });
      return o;
    };
}(jQuery));