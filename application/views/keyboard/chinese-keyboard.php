<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chinese Keyboard</title>
    <meta name="description" content="Easily type Chinese letters using our online Chinese keyboard">
    <meta name="keywords" content="chinese keyboard, chinese virtual keyboard, chinese keyboard online, chinese onscreen keyboard, type chinese online, type chinese letters online, type in chinese online, type chinese, type chinese keyboard, chinese typing, writing chinese, type in chinese, chinese letters, chinese keyboard layout, google chinese, chinese cangjie keyboard, chinese cangjie virtual keyboard, chinese cangjie keyboard online, chinese cangjie onscreen keyboard, type chinese cangjie keyboard, chinese cangjie keyboard layout, chinese cangjie input, cangjie input, chinese pinyin keyboard, chinese pinyin virtual keyboard, chinese pinyin keyboard online, chinese pinyin onscreen keyboard, type chinese pinyin keyboard, chinese pinyin keyboard layout, chinese input, chinese pinyin input, pinyin input, traditional chinese to simplified chinese, traditional to simplified, traditional chinese to simplified chinese converter, traditional to simplified converter, simplified chinese to traditional chinese, simplified to traditional, simplified chinese to traditional chinese converter, simplified to traditional converter, mandarin keyboard">
    

    <?php
      $this->load->view('include/headFiles.php');
      ?>
</head>
<body class="<?=$_SESSION['mode']?>">
    <?php
    $this->load->view('include/header.php');
    ?>
    
<section class="main-keyboard-template">
          <div class="container">
                <div class="main-keyboard-title">
                  <h1>Chinese Virtual Keyboard</h1>
                  <p>This online Chinese keyboard allows you to easily write Chinese characters without needing to install a keyboard. You could use the physical keyboard in your computer, or you could just simply click the characters by the use of the mouse.</p>
                  <p>The Esc button toggles between the QWERTY layout and the Chinese virtual keyboard. It also enables or disables input conversion. </p>
                </div>  

                <div class="main-keyboard-wrapper">
                    <div class="main-keyboard-box">
                      <div class="functionality-btns">
                        <button class="selectAllBtn">Select All</button>
                        <button class="copyBtn">Copy</button>
                        <button class="undoBtn">Undo</button>
                        <button class="redoBtn">Redo</button>
                        <button class="clearAllBtn">Clear All</button>
                        <button class="downloadBtn">Save Text</button>
                        <div class="image-btn-wrapper">
                            <button class="imageBtn">Download as an Image</button>
                            <label class="new">NEW</label>
                        </div>

                        <button class="decreaseFontBtn">-</button>
                        <button class="increaseFontBtn">+</button>
                      </div>
                      <textarea class="inputText_keyboard" ></textarea>
                      <div class="keyboard-setting">
                        <div class="emoji" style="display: none;">
                          <div class="all-emojis">
                            <div>
                              <p>😀</p>
                              <p>😁</p>
                              <p>😂</p>
                              <p>😃</p>
                              <p>😄</p>
                              <p>😅</p>
                              <p>😆</p>
                              <p>😂</p>
                              <p>🤣</p>
                              <p>😉</p>
                              <p>😊</p>
                              <p>😋</p>
                              <p>😌</p>
                            </div>
                            
                            <div>
                              <p>😍</p>
                              <p>😎</p>
                              <p>😏</p>
                              <p>😐</p>
                              <p>😑</p>
                              <p>😒</p>
                              <p>😓</p>
                              <p>😔</p>
                              <p>😕</p>
                              <p>😖</p>
                              <p>😗</p>
                              <p>😘</p>
                              <p>😙</p>
                              
                              
                            </div>
                            <div>
                              <p>😚</p>
                              <p>😛</p>
                              <p>😜</p>
                              <p>😝</p>
                              <p>😞</p>
                              <p>😟</p>
                              <p>😠</p>
                              <p>😇</p>
                              <p>😢</p>
                              <p>😣</p>
                              <p>😤</p>
                              <p>😥</p>
                              <p>😦</p>
                            </div>

                            <div>
                              <p>😧</p>
                              <p>😨</p>
                              <p>😩</p>
                              <p>😪</p>
                              <p>😫</p>
                              <p>😬</p>
                              <p>😭</p>
                              <p>😮</p>
                              <p>😯</p>
                              <p>😰</p>
                              <p>😱</p>
                              <p>😲</p>
                              <p>😳</p>
                            </div>

                            <div>
                              <p>😴</p>
                              <p>😵</p>
                              <p>😶</p>
                              <p>😷</p>
                              <p>🥺</p>
                              <p>🙁</p>
                              <p>🙂</p>
                              <p>🙃</p>
                              <p>🙄</p>
                              <p>✨</p>
                              <p>💯</p>
                              <p>🌹</p>
                              <p>💐</p>
                            </div>

                            <div>
                              
                              <p>💋</p>
                              <p>👁️</p>
                              <p>💤</p>
                              <p>🌙</p>
                              <p>❗</p>
                              <p>🌈</p>
                              <p>🔴</p>
                              <p>🙈</p>
                              <p>🙉</p>
                              <p>🙊</p>
                              <p>🙋</p>
                              <p>🙌</p>
                              <p>🙍</p>

                            </div>

                            <div> 
                              <p>💘</p>
                              <p>❤️</p>
                              <p>💓</p>
                              <p>💔</p>
                              <p>💕</p>
                              <p>💖</p>
                              <p>💗</p>
                              <p>💙</p>
                              <p>💚</p>
                              <p>💛</p>
                              <p>💜</p>
                              <p>💝</p>
                              <p>💞</p>
                            </div>
                            <div>
                              <p>🎔</p>
                              <p>❤️‍🩹</p>
                              <p>❤️‍🔥</p>
                              <p>🤎</p>
                              <p>🤍</p>
                              <p>💟</p>
                              <p>🏩</p>
                              <p>🖤</p>
                              <p>💒</p>
                              <p>♥️</p>
                              <p>🧡</p>
                              <p>👩‍❤️‍💋‍👨</p>
                              <p>👩‍❤️‍👨</p>
                              
                            </div>

                            <div>
                              <p>👩‍❤️‍👩</p>
                              <p>👨‍❤️‍👨</p>
                              <p>👩‍❤️‍💋‍👩</p>
                              <p>👨‍❤️‍💋‍👨</p>
                              <p>💏</p>
                              <p>💑</p>
                              <p>💌</p>
                              <p>🫀</p>
                              <p>❣️</p>
                              <p>♡</p>
                              <p>❥</p>
                              <p>❦</p>
                              <p>☙</p>
                            </div>
                            <div>
                              <p>🙥</p>
                              <p>🙦</p>
                              <p>🙧</p>
                              <p>🙨</p>
                              <p>🙩</p>
                              <p>🙪</p>
                              <p>🙫</p>
                              <p>🙬</p>
                              <p>🙭</p>
                              <p>🙮</p>
                              <p>🙯</p>
                              <p>🙰</p>
                              <p>🙱</p>
                              
                            </div>
                            <div>
                              <p>🙲</p>
                              <p>🙳</p>
                              <p>🙴</p>
                              <p>🙵</p>
                              <p>🙶</p>
                              <p>🙷</p>
                              <p>🙸</p>
                              <p>🙹</p>
                              <p>🙺</p>
                              <p>🙻</p>
                              <p>🙼</p>
                              <p>🙽</p>
                              <p>🙾</p>
                              
                              
                            </div>
                            <div>
                              <p>🙿</p>
                              <p>🚀</p>
                              <p>🚁</p>
                              <p>🚂</p>
                              <p>🚃</p>
                              <p>🚄</p>
                              <p>🚅</p>
                              <p>🚆</p>
                              <p>🚇</p>
                              <p>🚈</p>
                              <p>🚉</p>
                              <p>🚊</p>
                              <p>🚋</p>
                            </div>

                            <div>
                              <p>🚌</p>
                              <p>🚍</p>
                              <p>🚎</p>
                              <p>🚏</p>
                              <p>🚐</p>
                              <p>🚑</p>
                              <p>🚒</p>
                              <p>🚓</p>
                              <p>🚔</p>
                              <p>🚕</p>
                              <p>🚖</p>
                              <p>🚗</p>
                              <p>🚘</p>
                            </div>

                            <div>
                              <p>🌍</p>
                              <p>🌎</p>
                              <p>🌏</p>
                              <p>🌐</p>
                              <p>🗺️</p>
                              <p>🗾</p>
                              <p>🧭</p>
                              <p>🏔️</p>
                              <p>⛰️</p>
                              <p>🌋</p>
                              <p>🗻</p>
                              <p>🏕️</p>
                              <p>🏖️</p>
                            </div>

                            <div>
                              <p>🍇</p>
                              <p>🍈</p>
                              <p>🍉</p>
                              <p>🍊</p>
                              <p>🍋</p>
                              <p>🍋‍🟩</p>
                              <p>🍌</p>
                              <p>🍍</p>
                              <p>🥭</p>
                              <p>🍎</p>
                              <p>🍏</p>
                              <p>🍐</p>
                              <p>🍑</p>
                            </div>

                            <div>
                              <p>🍒</p>
                              <p>🍓</p>
                              <p>🫐</p>
                              <p>🥝</p>
                              <p>🍅</p>
                              <p>🫒</p>
                              <p>🥥</p>
                              <p>🥑</p>
                              <p>🍆</p>
                              <p>🥔</p>
                              <p>🥕</p>
                              <p>🌽</p>
                              <p>🌶️</p>
                            </div>

                            <div>
                              <p>🫑</p>
                              <p>🥒</p>
                              <p>🥬</p>
                              <p>🥦</p>
                              <p>🧄</p>
                              <p>🧅</p>
                              <p>🥜</p>
                              <p>🫘</p>
                              <p>🌰</p>
                              <p>🫚</p>
                              <p>🫛</p>
                              <p>🍄‍🟫</p>
                              <p>🍞</p>
                            </div>

                            <div>
                              <p>⚓</p>
                              <p>🛟</p>
                              <p>⛵</p>
                              <p>🛶</p>
                              <p>🚤</p>
                              <p>🛳️</p>
                              <p>⛴️</p>
                              <p>🛥️</p>
                              <p>🚢</p>
                              <p>✈️</p>
                              <p>🛩️</p>
                              <p>🛫</p>
                              <p>🛬</p>
                            </div>

                            <div>
                              <p>🪂</p>
                              <p>💺</p>
                              <p>🚁</p>
                              <p>🚟</p>
                              <p>🚠</p>
                              <p>🚡</p>
                              <p>🛰️</p>
                              <p>🚀</p>
                              <p>🛸</p>
                              <p>🎀</p>
                              <p>🎗️</p>
                              <p>👓</p>
                              <p>🕶️</p>
                            </div>

                            <div>
                              <p>🥽</p>
                              <p>🥼</p>
                              <p>🦺</p>
                              <p>👔</p>
                              <p>👕</p>
                              <p>👖</p>
                              <p>🧣</p>
                              <p>🧤</p>
                              <p>🧥</p>
                              <p>🧦</p>
                              <p>👗</p>
                              <p>👘</p>
                              <p>🥻</p>
                            </div>

                            <div>
                              <p>🩱</p>
                              <p>🩲</p>
                              <p>🩳</p>
                              <p>👙</p>
                              <p>👚</p>
                              <p>🪭</p>
                              <p>👛</p>
                              <p>👜</p>
                              <p>👝</p>
                              <p>🛍️</p>
                              <p>🎒</p>
                              <p>🩴</p>
                              <p>👞</p>
                            </div>

                            <div>
                              <p>👟</p>
                              <p>🥾</p>
                              <p>🥿</p>
                              <p>👠</p>
                              <p>👡</p>
                              <p>🩰</p>
                              <p>👢</p>
                              <p>🪮</p>
                              <p>👑</p>
                              <p>👒</p>
                              <p>🎩</p>
                              <p>🎓</p>
                              <p>🧢</p>
                            </div>

                            <div>
                              <p>🪖</p>
                              <p>⛑️</p>
                              <p>📿</p>
                              <p>💄</p>
                              <p>💍</p>
                              <p>💎</p>
                              <p>🦯</p>
                              <p>🛗</p>
                              <p>🏧</p>
                              <p>🚮</p>
                              <p>🚰</p>
                            </div>

                            <div>
                              <p>♿</p>
                              <p>🚹</p>
                              <p>🚺</p>
                              <p>🚻</p>
                              <p>🚼</p>
                              <p>🚾</p>
                              <p>🛂</p>
                              <p>🛃</p>
                              <p>🛄</p>
                              <p>🛅</p>
                              <p>⚠️</p>
                              <p>🚸</p>
                              <p>⛔</p>
                            </div>

                            <div>
                              <p>🚫</p>
                              <p>🚳</p>
                              <p>🚭</p>
                              <p>🚯</p>
                              <p>🚱</p>
                              <p>🚷</p>
                              <p>📵</p>
                              <p>🔞</p>
                              <p>☢️</p>
                              <p>☣️</p>
                              <p>⬆️</p>
                              <p>↗️</p>
                              <p>➡️</p>
                            </div>

                            <div>
                              <p>↘️</p>
                              <p>⬇️</p>
                              <p>↙️</p>
                              <p>⬅️</p>
                              <p>↖️</p>
                              <p>↕️</p>
                              <p>↔️</p>
                              <p>↩️</p>
                              <p>↪️</p>
                              <p>⤴️</p>
                              <p>⤵️</p>
                              <p>🔃</p>
                              <p>🔄</p>
                            </div>

                            <div>
                              <p>🔙</p>
                              <p>🔚</p>
                              <p>🔛</p>
                              <p>🔜</p>
                              <p>🔝</p>
                              <p>🔀</p>
                              <p>🔁</p>
                              <p>🔂</p>
                              <p>▶️</p>
                              <p>⏩</p>
                              <p>⏭️</p>
                              <p>⏯️</p>
                              <p>◀️</p>
                            </div>

                            <div>
                              <p>⏪</p>
                              <p>⏮️</p>
                              <p>🔼</p>
                              <p>⏫</p>
                              <p>🔽</p>
                              <p>⏬</p>
                              <p>⏸️</p>
                              <p>⏹️</p>
                              <p>⏺️</p>
                              <p>⏏️</p>
                              <p>🎦</p>
                              <p>🔅</p>
                              <p>🔆</p>
                            </div>

                            <div>
                              <p>📶</p>
                              <p>🛜</p>
                              <p>📳</p>
                              <p>📴</p>
                              <p>🛐</p>
                              <p>🕉️</p>
                              <p>✡️</p>
                              <p>☸️</p>
                              <p>☯️</p>
                              <p>✝️</p>
                              <p>☦️</p>
                              <p>☪️</p>
                              <p>☮️</p>
                            </div>

                            <div>
                              <p>🕎</p>
                              <p>🔯</p>
                              <p>🪯</p>
                              <p>♈</p>
                              <p>♉</p>
                              <p>♊</p>
                              <p>♋</p>
                              <p>♌</p>
                              <p>♍</p>
                              <p>♎</p>
                              <p>♏</p>
                              <p>♐</p>
                              <p>♑</p>
                            </div>

                            <div>
                              <p>♒</p>
                              <p>♓</p>
                              <p>⛎</p>
                              <p>♀️</p>
                              <p>♂️</p>
                              <p>⚧️</p>
                              <p>✖️</p>
                              <p>➕</p>
                              <p>➖</p>
                              <p>➗</p>
                              <p>🟰</p>
                              <p>♾️</p>
                              <p>‼️</p>
                            </div>

                            <div>
                              <p>⁉️</p>
                              <p>❓</p>
                              <p>❔</p>
                              <p>❕</p>
                              <p>❗</p>
                              <p>〰️</p>
                              <p>💱</p>
                              <p>💲</p>
                              <p>#️⃣</p>
                              <p>*️⃣</p>
                              <p>0️⃣</p>
                              <p>1️⃣</p>
                              <p>2️⃣</p>
                            </div>

                            <div>
                              <p>3️⃣</p>
                              <p>4️⃣</p>
                              <p>5️⃣</p>
                              <p>6️⃣</p>
                              <p>7️⃣</p>
                              <p>8️⃣</p>
                              <p>9️⃣</p>
                              <p>🔟</p>
                              <p>🔠</p>
                              <p>🔡</p>
                              <p>🔢</p>
                              <p>🔣</p>
                              <p>🔤</p>
                            </div>

                            <div>
                              <p>🅰️</p>
                              <p>🆎</p>
                              <p>🅱️</p>
                              <p>🆑</p>
                              <p>🆒</p>
                              <p>🆓</p>
                              <p>ℹ️</p>
                              <p>🆔</p>
                              <p>Ⓜ️</p>
                              <p>🆕</p>
                              <p>🆖</p>
                              <p>🅾️</p>
                              <p>🆗</p>
                            </div>

                            <div>
                              <p>🆘</p>
                              <p>🆙</p>
                              <p>🆚</p>
                              <p>🈁</p>
                              <p>🈂️</p>
                              <p>🈷️</p>
                              <p>🈶</p>
                              <p>🈯</p>
                              <p>🉐</p>
                              <p>🈹</p>
                              <p>🈚</p>
                              <p>🈲</p>
                              <p>🉑</p>
                              <p>🈸</p>
                              <p>🈴</p>
                              <p>🈳</p>
                              <p>㊗️</p>
                              <p>㊙️</p>
                              <p>🈺</p>
                              <p>🈵</p>
                            </div>
                          </div>
                          <div class="side-icons">
                            <div class="up bg-clr">⏶</div>
                            <div class="abc bg-clr">abc</div>
                            <div class="backspace bg-clr">⌫</div>
                            <div class="enter bg-clr">↵</div>
                            <div class="down bg-clr">⏷</div>
                        </div>
                          
                        </div>
                        <div class="cangjie-keyboard">
                            <div class="row">
                                <div class="key" data-key="`"><small>`</small><p>`</p></div>
                                <div class="key" data-num-key="1"><small>1</small><p>1</p></div>
                                <div class="key" data-num-key="2"><small>2</small><p>2</p></div>
                                <div class="key" data-num-key="3"><small>3</small><p>3</p></div>
                                <div class="key" data-num-key="4"><small>4</small><p>4</p></div>
                                
                                <div class="key" data-num-key="5"><small>5</small><p>5</p></div>
                                <div class="key" data-num-key="6"><small>6</small><p>6</p></div>
                                <div class="key" data-num-key="7"><small>7</small><p>7</p></div>
                                <div class="key" data-num-key="8"><small>8</small><p>8</p></div>
                                <div class="key" data-num-key="9"><small>9</small><p>9</p></div>
                                <div class="key" data-key="0"><small>0</small><p>0</p></div>
                                <div class="key" data-key="-"><small>-</small><p>-</p></div>
                                <div class="key" data-key="="><small>=</small><p>=</p></div>
                                <div class="key wide backspace" data-key="Backspace">Backspace</div>
                            </div>
                            <div class="row">
                                <div class="key wide" data-key="Tab">Tab</div>
                                <div class="key" data-key="q"><small>q</small><p>手</p></div>

                                <div class="key" data-key="w"><small>w</small><p>田</p></div>
                                
                                <div class="key" data-key="e"><small>e</small><p>水</p></div>
                                <div class="key" data-key="r"><small>r</small><p>口</p></div>
                                <div class="key" data-key="t"><small>t</small><p>廿</p></div>

                                <div class="key" data-key="y"><small>y</small><p>卜</p></div>

                                <div class="key" data-key="u"><small>u</small><p>山</p></div>
                                <div class="key" data-key="i"><small>i</small><p>戈</p></div>
                                <div class="key" data-key="o"><small>o</small><p>人</p></div>
                                <div class="key" data-key="p"><small>p</small><p>心</p></div>
                                <div class="key" data-key="["><small>[</small><p>[</p></div>
                                <div class="key" data-key="]"><small>]</small><p>]</p></div>
                                <div class="key" data-key="\"><small>\</small><p>、</p></div>
                            </div>
                            <div class="row">
                                <div class="key extra-wide caps" data-key="Caps Lock">Caps Lock</div>
                                <div class="key" data-key="a"><small>a</small><p>日</p></div>
                                <div class="key" data-key="s"><small>s</small><p>尸</p></div>
                                <div class="key" data-key="d"><small>d</small><p>木</p></div>
                                <div class="key" data-key="f"><small>f</small><p>火</p></div>
                                <div class="key" data-key="g"><small>g</small><p>土</p></div>
                                <div class="key" data-key="h"><small>h</small><p>竹</p></div>
                                <div class="key" data-key="j"><small>j</small><p>十</p></div>
                                <div class="key" data-key="k"><small>k</small><p>大</p></div>
                                <div class="key" data-key="l"><small>l</small><p>中</p></div>
                                <div class="key" data-key=";"><small>;</small><p>;</p></div>
                                <div class="key" data-key="'"><small>'</small><p>'</p></div>
                                <div class="key extra-wide" data-key="Enter">Enter</div>
                            </div>
                            <div class="row">
                                <div class="key wide extra-shift" data-key="Shift">Shift</div>
                                <div class="key" data-key="z"><small>z</small><p>Ｚ</p></div>
                                <div class="key" data-key="x"><small>x</small><p>難</p></div>
                                <div class="key" data-key="c"><small>c</small><p>金</p></div>
                                <div class="key" data-key="v"><small>v</small><p>女</p></div>
                                <div class="key" data-key="b"><small>b</small><p>月</p></div>
                                <div class="key" data-key="n"><small>n</small><p>弓</p></div>
                                <div class="key" data-key="m"><small>m</small><p>一</p></div>

                                <div class="key" data-key=","><small>,</small><p>,</p></div>
                                <div class="key" data-key="."><small>.</small><p>。</p></div>
                                <div class="key" data-key="/"><small>/</small><p>/</p></div>
                                <div class="key wide" data-key="Shift">Shift</div>
                            </div>
                            <div class="row">
                                <div class="key wide" data-key="Ctrl">Ctrl</div>
                                <div class="key wide emojibtn" data-key="Emoji">🙂</div>
                                <div class="key wide" data-key="Alt">Alt</div>
                                <div class="key extra-wide space" data-key="Space">Space</div>
                                <div class="key wide" data-key="AltGr">AltGr</div>
                                <div class="key esc" data-key="Esc">Esc</div>
                                <div class="key wide" data-key="Ctrl">Ctrl</div>
                            </div>
                        </div>

                        <div class="pinyin-keyboard" style="display: none;">
                            <div class="row">
                                <div class="key" data-key="`"><small>`</small><p>`</p></div>
                                <div class="key" data-num-key="1"><small>1</small><p>1</p></div>
                                <div class="key" data-num-key="2"><small>2</small><p>2</p></div>
                                <div class="key" data-num-key="3"><small>3</small><p>3</p></div>
                                <div class="key" data-num-key="4"><small>4</small><p>4</p></div>
                                
                                <div class="key" data-num-key="5"><small>5</small><p>5</p></div>
                                <div class="key" data-num-key="6"><small>6</small><p>6</p></div>
                                <div class="key" data-num-key="7"><small>7</small><p>7</p></div>
                                <div class="key" data-num-key="8"><small>8</small><p>8</p></div>
                                <div class="key" data-num-key="9"><small>9</small><p>9</p></div>
                                <div class="key" data-key="0"><small>0</small><p>0</p></div>
                                <div class="key" data-key="-"><small>-</small><p>-</p></div>
                                <div class="key" data-key="="><small>=</small><p>=</p></div>
                                <div class="key wide backspace" data-key="Backspace">Backspace</div>
                            </div>
                            <div class="row">
                                <div class="key wide" data-key="Tab">Tab</div>
                                <div class="key" data-key="q"><small>q</small><p>q</p></div>

                                <div class="key" data-key="w"><small>w</small><p>w</p></div>
                                
                                <div class="key" data-key="e"><small>e</small><p>e</p></div>
                                <div class="key" data-key="r"><small>r</small><p>r</p></div>
                                <div class="key" data-key="t"><small>t</small><p>t</p></div>

                                <div class="key" data-key="y"><small>y</small><p>y</p></div>

                                <div class="key" data-key="u"><small>u</small><p>u</p></div>
                                <div class="key" data-key="i"><small>i</small><p>i</p></div>
                                <div class="key" data-key="o"><small>o</small><p>o</p></div>
                                <div class="key" data-key="p"><small>p</small><p>p</p></div>
                                <div class="key" data-key="["><small>[</small><p>[</p></div>
                                <div class="key" data-key="]"><small>]</small><p>]</p></div>
                                <div class="key" data-key="\"><small>\</small><p>、</p></div>
                            </div>
                            <div class="row">
                                <div class="key extra-wide caps" data-key="Caps Lock">Caps Lock</div>
                                <div class="key" data-key="a"><small>a</small><p>a</p></div>
                                <div class="key" data-key="s"><small>s</small><p>s</p></div>
                                <div class="key" data-key="d"><small>d</small><p>d</p></div>
                                <div class="key" data-key="f"><small>f</small><p>f</p></div>
                                <div class="key" data-key="g"><small>g</small><p>g</p></div>
                                <div class="key" data-key="h"><small>h</small><p>h</p></div>
                                <div class="key" data-key="j"><small>j</small><p>j</p></div>
                                <div class="key" data-key="k"><small>k</small><p>k</p></div>
                                <div class="key" data-key="l"><small>l</small><p>l</p></div>
                                <div class="key" data-key=";"><small>;</small><p>;</p></div>
                                <div class="key" data-key="'"><small>'</small><p>'</p></div>
                                <div class="key extra-wide" data-key="Enter">Enter</div>
                            </div>
                            <div class="row">
                                <div class="key wide extra-shift" data-key="Shift">Shift</div>
                                <div class="key" data-key="z"><small>z</small><p>Ｚ</p></div>
                                <div class="key" data-key="x"><small>x</small><p>x</p></div>
                                <div class="key" data-key="c"><small>c</small><p>c</p></div>
                                <div class="key" data-key="v"><small>v</small><p>v</p></div>
                                <div class="key" data-key="b"><small>b</small><p>b</p></div>
                                <div class="key" data-key="n"><small>n</small><p>n</p></div>
                                <div class="key" data-key="m"><small>m</small><p>m</p></div>

                                <div class="key" data-key=","><small>,</small><p>,</p></div>
                                <div class="key" data-key="."><small>.</small><p>。</p></div>
                                <div class="key" data-key="/"><small>/</small><p>/</p></div>
                                <div class="key wide" data-key="Shift">Shift</div>
                            </div>
                            <div class="row">
                                <div class="key wide" data-key="Ctrl">Ctrl</div>
                                <div class="key wide emojibtn" data-key="Emoji">🙂</div>
                                <div class="key wide" data-key="Alt">Alt</div>
                                <div class="key extra-wide space" data-key="Space">Space</div>
                                <div class="key wide" data-key="AltGr">AltGr</div>
                                <div class="key esc" data-key="Esc">Esc</div>
                                <div class="key wide" data-key="Ctrl">Ctrl</div>
                            </div>
                        </div>
                      </div>

                        <div class="radio-group">
                          <input type="radio" id="cangjie-keyboard" name="keyboard-layout" value="cangjie" checked>
                          <label for="cangjie-keyboard">Cangjie Input</label>

                          <input type="radio" id="pinyin-keyboard" name="keyboard-layout" value="pinyin">
                          <label for="pinyin-keyboard">Pinyin Input</label>
                      </div>        
                      </div>
                      
                </div>   
          </div>
        <div class="clear"></div>
</section>


<section class="content">
    <div class="container">
      <div id="about">
          <div class="about-paragraph">
            <h2>Typing in Chinese</h2>
            <h3>Using Cangjie Input</h3>
            <p>With the use of the Cangjie input, the character components are located above the numeral keys. You just select the character you need by either point-and-click operation, or by using your keyboard.</p>

            <h3>Using Pinyin Input</h3>
            <p>For using Pinyin, type the phonetic spelling of the character. Suggested characters will appear above the number keys. You can select your desired character by clicking on it or pressing the corresponding number key.</p>

            <h2>Keyboard Shortcuts and Navigation</h2>
            <ul>
                <li>Use the ◂ and ▸ keys to cycle through character suggestions.</li>
                <li>Press the Spacebar to select the first suggested character.</li>
                <li>Hold the Shift key to access additional characters.</li>
            </ul>

            <h2>Converting Between Traditional and Simplified Chinese</h2>
            <ul>
              <li>
                <h3>Traditional to Simplified Conversion</h3>
                <p>When switching from Traditional to Simplified Chinese, the characters will automatically convert. If a Traditional character has multiple Simplified variants, all options will be shown in brackets. For example, 餘 will appear as [余馀].</p>
              </li>
              <li>
                <h3>Simplified to Traditional Conversion</h3>
                <p>Likewise, when switching from Simplified to Traditional, the characters will automatically convert. If a Simplified character has multiple Traditional forms, those will also appear in brackets. For example, 复 will show as [復複覆].</p>
              </li>
            </ul>
          </div>
      </div>
    </div>
    <div class="clear"></div>
</section>

<?php
$this->load->view('include/footer.php');  
?>
<script type="text/javascript" src="<?=base_url('assets/keyboard_js/chinese-keyboard.js')?>"></script>
