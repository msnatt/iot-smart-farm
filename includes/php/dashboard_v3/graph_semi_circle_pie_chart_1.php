<style>


/* Normal zone */


h2.semi_pie {
  margin-left: 20px;
}

.container_semi_circle {
  /* display: inline-block; */
  /* margin: 30px 20px; */
  /* border:1px solid #f00; */
  margin: 0px auto;
  margin-top:90px;
}
.container_semi_circle .label-text {
  display: block;
  text-align: center;
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 15px;
}

.pie-wrapper {
  position: relative;
  width: 200px;
  height: 100px;
  overflow: hidden;
  /* border:1px solid #f00; */
  margin: 0px auto;
}
.pie-wrapper .arc, .pie-wrapper:before {
  content: '';
  width: 200px;
  height: 100px;
  position: absolute;
  -ms-transform-origin: 50% 0%;
  -webkit-transform-origin: 50% 0%;
  transform-origin: 50% 0%;
  left: 0;
  box-sizing: border-box;
}
.pie-wrapper:before {
  border: 50px solid #E8E8E8;
  border-bottom: none;
  top: 0;
  z-index: 1;
  border-radius: 300px 300px 0 0;
}
.pie-wrapper .arc {
  border: 50px solid #47CF73;
  border-top: none;
  border-radius: 0 0 300px 300px;
  top: 100%;
  z-index: 2;
}
.pie-wrapper .arc::before {
  content: "";
  height: 1px;
  width: 5px;
  position: absolute;
  top: 0px;
}
.pie-wrapper .score2 {
  color: #394955;
  font-size: 18px;
  display: block;
  width: 200px;
  text-align: center;
  margin-top: 70px;
}

.arc[data-value="1"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(1.8deg);
  -ms-transform: rotate(1.8deg);
  -webkit-transform: rotate(1.8deg);
  transform: rotate(1.8deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="1"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="1"]::before {
  background-color: #47CF73;
}

.arc[data-value="2"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(3.6deg);
  -ms-transform: rotate(3.6deg);
  -webkit-transform: rotate(3.6deg);
  transform: rotate(3.6deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="2"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="2"]::before {
  background-color: #47CF73;
}

.arc[data-value="3"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(5.4deg);
  -ms-transform: rotate(5.4deg);
  -webkit-transform: rotate(5.4deg);
  transform: rotate(5.4deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="3"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="3"]::before {
  background-color: #47CF73;
}

.arc[data-value="4"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(7.2deg);
  -ms-transform: rotate(7.2deg);
  -webkit-transform: rotate(7.2deg);
  transform: rotate(7.2deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="4"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="4"]::before {
  background-color: #47CF73;
}

.arc[data-value="5"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(9deg);
  -ms-transform: rotate(9deg);
  -webkit-transform: rotate(9deg);
  transform: rotate(9deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="5"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="5"]::before {
  background-color: #47CF73;
}

.arc[data-value="6"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(10.8deg);
  -ms-transform: rotate(10.8deg);
  -webkit-transform: rotate(10.8deg);
  transform: rotate(10.8deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="6"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="6"]::before {
  background-color: #47CF73;
}

.arc[data-value="7"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(12.6deg);
  -ms-transform: rotate(12.6deg);
  -webkit-transform: rotate(12.6deg);
  transform: rotate(12.6deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="7"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="7"]::before {
  background-color: #47CF73;
}

.arc[data-value="8"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(14.4deg);
  -ms-transform: rotate(14.4deg);
  -webkit-transform: rotate(14.4deg);
  transform: rotate(14.4deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="8"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="8"]::before {
  background-color: #47CF73;
}

.arc[data-value="9"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(16.2deg);
  -ms-transform: rotate(16.2deg);
  -webkit-transform: rotate(16.2deg);
  transform: rotate(16.2deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="9"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="9"]::before {
  background-color: #47CF73;
}

.arc[data-value="10"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(18deg);
  -ms-transform: rotate(18deg);
  -webkit-transform: rotate(18deg);
  transform: rotate(18deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="10"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="10"]::before {
  background-color: #47CF73;
}

.arc[data-value="11"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(19.8deg);
  -ms-transform: rotate(19.8deg);
  -webkit-transform: rotate(19.8deg);
  transform: rotate(19.8deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="11"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="11"]::before {
  background-color: #47CF73;
}

.arc[data-value="12"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(21.6deg);
  -ms-transform: rotate(21.6deg);
  -webkit-transform: rotate(21.6deg);
  transform: rotate(21.6deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="12"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="12"]::before {
  background-color: #47CF73;
}

.arc[data-value="13"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(23.4deg);
  -ms-transform: rotate(23.4deg);
  -webkit-transform: rotate(23.4deg);
  transform: rotate(23.4deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="13"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="13"]::before {
  background-color: #47CF73;
}

.arc[data-value="14"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(25.2deg);
  -ms-transform: rotate(25.2deg);
  -webkit-transform: rotate(25.2deg);
  transform: rotate(25.2deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="14"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="14"]::before {
  background-color: #47CF73;
}

.arc[data-value="15"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(27deg);
  -ms-transform: rotate(27deg);
  -webkit-transform: rotate(27deg);
  transform: rotate(27deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="15"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="15"]::before {
  background-color: #47CF73;
}

.arc[data-value="16"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(28.8deg);
  -ms-transform: rotate(28.8deg);
  -webkit-transform: rotate(28.8deg);
  transform: rotate(28.8deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="16"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="16"]::before {
  background-color: #47CF73;
}

.arc[data-value="17"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(30.6deg);
  -ms-transform: rotate(30.6deg);
  -webkit-transform: rotate(30.6deg);
  transform: rotate(30.6deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="17"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="17"]::before {
  background-color: #47CF73;
}

.arc[data-value="18"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(32.4deg);
  -ms-transform: rotate(32.4deg);
  -webkit-transform: rotate(32.4deg);
  transform: rotate(32.4deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="18"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="18"]::before {
  background-color: #47CF73;
}

.arc[data-value="19"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(34.2deg);
  -ms-transform: rotate(34.2deg);
  -webkit-transform: rotate(34.2deg);
  transform: rotate(34.2deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="19"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="19"]::before {
  background-color: #47CF73;
}

.arc[data-value="20"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(36deg);
  -ms-transform: rotate(36deg);
  -webkit-transform: rotate(36deg);
  transform: rotate(36deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="20"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="20"]::before {
  background-color: #47CF73;
}

.arc[data-value="21"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(37.8deg);
  -ms-transform: rotate(37.8deg);
  -webkit-transform: rotate(37.8deg);
  transform: rotate(37.8deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="21"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="21"]::before {
  background-color: #47CF73;
}

.arc[data-value="22"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(39.6deg);
  -ms-transform: rotate(39.6deg);
  -webkit-transform: rotate(39.6deg);
  transform: rotate(39.6deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="22"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="22"]::before {
  background-color: #47CF73;
}

.arc[data-value="23"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(41.4deg);
  -ms-transform: rotate(41.4deg);
  -webkit-transform: rotate(41.4deg);
  transform: rotate(41.4deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="23"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="23"]::before {
  background-color: #47CF73;
}

.arc[data-value="24"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(43.2deg);
  -ms-transform: rotate(43.2deg);
  -webkit-transform: rotate(43.2deg);
  transform: rotate(43.2deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="24"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="24"]::before {
  background-color: #47CF73;
}

.arc[data-value="25"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="25"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="25"]::before {
  background-color: #47CF73;
}

.arc[data-value="26"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(46.8deg);
  -ms-transform: rotate(46.8deg);
  -webkit-transform: rotate(46.8deg);
  transform: rotate(46.8deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="26"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="26"]::before {
  background-color: #47CF73;
}

.arc[data-value="27"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(48.6deg);
  -ms-transform: rotate(48.6deg);
  -webkit-transform: rotate(48.6deg);
  transform: rotate(48.6deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="27"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="27"]::before {
  background-color: #47CF73;
}

.arc[data-value="28"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(50.4deg);
  -ms-transform: rotate(50.4deg);
  -webkit-transform: rotate(50.4deg);
  transform: rotate(50.4deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="28"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="28"]::before {
  background-color: #47CF73;
}

.arc[data-value="29"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(52.2deg);
  -ms-transform: rotate(52.2deg);
  -webkit-transform: rotate(52.2deg);
  transform: rotate(52.2deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="29"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="29"]::before {
  background-color: #47CF73;
}

.arc[data-value="30"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(54deg);
  -ms-transform: rotate(54deg);
  -webkit-transform: rotate(54deg);
  transform: rotate(54deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="30"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="30"]::before {
  background-color: #47CF73;
}

.arc[data-value="31"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(55.8deg);
  -ms-transform: rotate(55.8deg);
  -webkit-transform: rotate(55.8deg);
  transform: rotate(55.8deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="31"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="31"]::before {
  background-color: #47CF73;
}

.arc[data-value="32"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(57.6deg);
  -ms-transform: rotate(57.6deg);
  -webkit-transform: rotate(57.6deg);
  transform: rotate(57.6deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="32"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="32"]::before {
  background-color: #47CF73;
}

.arc[data-value="33"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(59.4deg);
  -ms-transform: rotate(59.4deg);
  -webkit-transform: rotate(59.4deg);
  transform: rotate(59.4deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="33"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="33"]::before {
  background-color: #47CF73;
}

.arc[data-value="34"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(61.2deg);
  -ms-transform: rotate(61.2deg);
  -webkit-transform: rotate(61.2deg);
  transform: rotate(61.2deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="34"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="34"]::before {
  background-color: #47CF73;
}

.arc[data-value="35"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(63deg);
  -ms-transform: rotate(63deg);
  -webkit-transform: rotate(63deg);
  transform: rotate(63deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="35"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="35"]::before {
  background-color: #47CF73;
}

.arc[data-value="36"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(64.8deg);
  -ms-transform: rotate(64.8deg);
  -webkit-transform: rotate(64.8deg);
  transform: rotate(64.8deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="36"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="36"]::before {
  background-color: #47CF73;
}

.arc[data-value="37"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(66.6deg);
  -ms-transform: rotate(66.6deg);
  -webkit-transform: rotate(66.6deg);
  transform: rotate(66.6deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="37"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="37"]::before {
  background-color: #47CF73;
}

.arc[data-value="38"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(68.4deg);
  -ms-transform: rotate(68.4deg);
  -webkit-transform: rotate(68.4deg);
  transform: rotate(68.4deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="38"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="38"]::before {
  background-color: #47CF73;
}

.arc[data-value="39"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(70.2deg);
  -ms-transform: rotate(70.2deg);
  -webkit-transform: rotate(70.2deg);
  transform: rotate(70.2deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="39"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="39"]::before {
  background-color: #47CF73;
}

.arc[data-value="40"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(72deg);
  -ms-transform: rotate(72deg);
  -webkit-transform: rotate(72deg);
  transform: rotate(72deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="40"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="40"]::before {
  background-color: #47CF73;
}

.arc[data-value="41"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(73.8deg);
  -ms-transform: rotate(73.8deg);
  -webkit-transform: rotate(73.8deg);
  transform: rotate(73.8deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="41"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="41"]::before {
  background-color: #47CF73;
}

.arc[data-value="42"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(75.6deg);
  -ms-transform: rotate(75.6deg);
  -webkit-transform: rotate(75.6deg);
  transform: rotate(75.6deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="42"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="42"]::before {
  background-color: #47CF73;
}

.arc[data-value="43"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(77.4deg);
  -ms-transform: rotate(77.4deg);
  -webkit-transform: rotate(77.4deg);
  transform: rotate(77.4deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="43"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="43"]::before {
  background-color: #47CF73;
}

.arc[data-value="44"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(79.2deg);
  -ms-transform: rotate(79.2deg);
  -webkit-transform: rotate(79.2deg);
  transform: rotate(79.2deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="44"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="44"]::before {
  background-color: #47CF73;
}

.arc[data-value="45"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(81deg);
  -ms-transform: rotate(81deg);
  -webkit-transform: rotate(81deg);
  transform: rotate(81deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="45"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="45"]::before {
  background-color: #47CF73;
}

.arc[data-value="46"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(82.8deg);
  -ms-transform: rotate(82.8deg);
  -webkit-transform: rotate(82.8deg);
  transform: rotate(82.8deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="46"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="46"]::before {
  background-color: #47CF73;
}

.arc[data-value="47"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(84.6deg);
  -ms-transform: rotate(84.6deg);
  -webkit-transform: rotate(84.6deg);
  transform: rotate(84.6deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="47"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="47"]::before {
  background-color: #47CF73;
}

.arc[data-value="48"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(86.4deg);
  -ms-transform: rotate(86.4deg);
  -webkit-transform: rotate(86.4deg);
  transform: rotate(86.4deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="48"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="48"]::before {
  background-color: #47CF73;
}

.arc[data-value="49"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(88.2deg);
  -ms-transform: rotate(88.2deg);
  -webkit-transform: rotate(88.2deg);
  transform: rotate(88.2deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="49"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="49"]::before {
  background-color: #47CF73;
}

.arc[data-value="50"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="50"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="50"]::before {
  background-color: #47CF73;
}

.arc[data-value="51"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(91.8deg);
  -ms-transform: rotate(91.8deg);
  -webkit-transform: rotate(91.8deg);
  transform: rotate(91.8deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="51"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="51"]::before {
  background-color: #47CF73;
}

.arc[data-value="52"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(93.6deg);
  -ms-transform: rotate(93.6deg);
  -webkit-transform: rotate(93.6deg);
  transform: rotate(93.6deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="52"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="52"]::before {
  background-color: #47CF73;
}

.arc[data-value="53"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(95.4deg);
  -ms-transform: rotate(95.4deg);
  -webkit-transform: rotate(95.4deg);
  transform: rotate(95.4deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="53"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="53"]::before {
  background-color: #47CF73;
}

.arc[data-value="54"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(97.2deg);
  -ms-transform: rotate(97.2deg);
  -webkit-transform: rotate(97.2deg);
  transform: rotate(97.2deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="54"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="54"]::before {
  background-color: #47CF73;
}

.arc[data-value="55"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(99deg);
  -ms-transform: rotate(99deg);
  -webkit-transform: rotate(99deg);
  transform: rotate(99deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="55"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="55"]::before {
  background-color: #47CF73;
}

.arc[data-value="56"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(100.8deg);
  -ms-transform: rotate(100.8deg);
  -webkit-transform: rotate(100.8deg);
  transform: rotate(100.8deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="56"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="56"]::before {
  background-color: #47CF73;
}

.arc[data-value="57"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(102.6deg);
  -ms-transform: rotate(102.6deg);
  -webkit-transform: rotate(102.6deg);
  transform: rotate(102.6deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="57"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="57"]::before {
  background-color: #47CF73;
}

.arc[data-value="58"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(104.4deg);
  -ms-transform: rotate(104.4deg);
  -webkit-transform: rotate(104.4deg);
  transform: rotate(104.4deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="58"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="58"]::before {
  background-color: #47CF73;
}

.arc[data-value="59"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(106.2deg);
  -ms-transform: rotate(106.2deg);
  -webkit-transform: rotate(106.2deg);
  transform: rotate(106.2deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="59"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="59"]::before {
  background-color: #47CF73;
}

.arc[data-value="60"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(108deg);
  -ms-transform: rotate(108deg);
  -webkit-transform: rotate(108deg);
  transform: rotate(108deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="60"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="60"]::before {
  background-color: #47CF73;
}

.arc[data-value="61"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(109.8deg);
  -ms-transform: rotate(109.8deg);
  -webkit-transform: rotate(109.8deg);
  transform: rotate(109.8deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="61"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="61"]::before {
  background-color: #47CF73;
}

.arc[data-value="62"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(111.6deg);
  -ms-transform: rotate(111.6deg);
  -webkit-transform: rotate(111.6deg);
  transform: rotate(111.6deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="62"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="62"]::before {
  background-color: #47CF73;
}

.arc[data-value="63"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(113.4deg);
  -ms-transform: rotate(113.4deg);
  -webkit-transform: rotate(113.4deg);
  transform: rotate(113.4deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="63"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="63"]::before {
  background-color: #47CF73;
}

.arc[data-value="64"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(115.2deg);
  -ms-transform: rotate(115.2deg);
  -webkit-transform: rotate(115.2deg);
  transform: rotate(115.2deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="64"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="64"]::before {
  background-color: #47CF73;
}

.arc[data-value="65"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(117deg);
  -ms-transform: rotate(117deg);
  -webkit-transform: rotate(117deg);
  transform: rotate(117deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="65"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="65"]::before {
  background-color: #47CF73;
}

.arc[data-value="66"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(118.8deg);
  -ms-transform: rotate(118.8deg);
  -webkit-transform: rotate(118.8deg);
  transform: rotate(118.8deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="66"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="66"]::before {
  background-color: #47CF73;
}

.arc[data-value="67"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(120.6deg);
  -ms-transform: rotate(120.6deg);
  -webkit-transform: rotate(120.6deg);
  transform: rotate(120.6deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="67"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="67"]::before {
  background-color: #47CF73;
}

.arc[data-value="68"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(122.4deg);
  -ms-transform: rotate(122.4deg);
  -webkit-transform: rotate(122.4deg);
  transform: rotate(122.4deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="68"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="68"]::before {
  background-color: #47CF73;
}

.arc[data-value="69"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(124.2deg);
  -ms-transform: rotate(124.2deg);
  -webkit-transform: rotate(124.2deg);
  transform: rotate(124.2deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="69"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="69"]::before {
  background-color: #47CF73;
}

.arc[data-value="70"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(126deg);
  -ms-transform: rotate(126deg);
  -webkit-transform: rotate(126deg);
  transform: rotate(126deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="70"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="70"]::before {
  background-color: #47CF73;
}

.arc[data-value="71"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(127.8deg);
  -ms-transform: rotate(127.8deg);
  -webkit-transform: rotate(127.8deg);
  transform: rotate(127.8deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="71"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="71"]::before {
  background-color: #47CF73;
}

.arc[data-value="72"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(129.6deg);
  -ms-transform: rotate(129.6deg);
  -webkit-transform: rotate(129.6deg);
  transform: rotate(129.6deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="72"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="72"]::before {
  background-color: #47CF73;
}

.arc[data-value="73"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(131.4deg);
  -ms-transform: rotate(131.4deg);
  -webkit-transform: rotate(131.4deg);
  transform: rotate(131.4deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="73"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="73"]::before {
  background-color: #47CF73;
}

.arc[data-value="74"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(133.2deg);
  -ms-transform: rotate(133.2deg);
  -webkit-transform: rotate(133.2deg);
  transform: rotate(133.2deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="74"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="74"]::before {
  background-color: #47CF73;
}

.arc[data-value="75"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(135deg);
  -ms-transform: rotate(135deg);
  -webkit-transform: rotate(135deg);
  transform: rotate(135deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="75"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="75"]::before {
  background-color: #47CF73;
}

.arc[data-value="76"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(136.8deg);
  -ms-transform: rotate(136.8deg);
  -webkit-transform: rotate(136.8deg);
  transform: rotate(136.8deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="76"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="76"]::before {
  background-color: #47CF73;
}

.arc[data-value="77"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(138.6deg);
  -ms-transform: rotate(138.6deg);
  -webkit-transform: rotate(138.6deg);
  transform: rotate(138.6deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="77"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="77"]::before {
  background-color: #47CF73;
}

.arc[data-value="78"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(140.4deg);
  -ms-transform: rotate(140.4deg);
  -webkit-transform: rotate(140.4deg);
  transform: rotate(140.4deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="78"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="78"]::before {
  background-color: #47CF73;
}

.arc[data-value="79"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(142.2deg);
  -ms-transform: rotate(142.2deg);
  -webkit-transform: rotate(142.2deg);
  transform: rotate(142.2deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="79"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="79"]::before {
  background-color: #47CF73;
}

.arc[data-value="80"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(144deg);
  -ms-transform: rotate(144deg);
  -webkit-transform: rotate(144deg);
  transform: rotate(144deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="80"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="80"]::before {
  background-color: #47CF73;
}

.arc[data-value="81"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(145.8deg);
  -ms-transform: rotate(145.8deg);
  -webkit-transform: rotate(145.8deg);
  transform: rotate(145.8deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="81"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="81"]::before {
  background-color: #47CF73;
}

.arc[data-value="82"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(147.6deg);
  -ms-transform: rotate(147.6deg);
  -webkit-transform: rotate(147.6deg);
  transform: rotate(147.6deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="82"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="82"]::before {
  background-color: #47CF73;
}

.arc[data-value="83"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(149.4deg);
  -ms-transform: rotate(149.4deg);
  -webkit-transform: rotate(149.4deg);
  transform: rotate(149.4deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="83"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="83"]::before {
  background-color: #47CF73;
}

.arc[data-value="84"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(151.2deg);
  -ms-transform: rotate(151.2deg);
  -webkit-transform: rotate(151.2deg);
  transform: rotate(151.2deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="84"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="84"]::before {
  background-color: #47CF73;
}

.arc[data-value="85"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(153deg);
  -ms-transform: rotate(153deg);
  -webkit-transform: rotate(153deg);
  transform: rotate(153deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="85"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="85"]::before {
  background-color: #47CF73;
}

.arc[data-value="86"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(154.8deg);
  -ms-transform: rotate(154.8deg);
  -webkit-transform: rotate(154.8deg);
  transform: rotate(154.8deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="86"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="86"]::before {
  background-color: #47CF73;
}

.arc[data-value="87"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(156.6deg);
  -ms-transform: rotate(156.6deg);
  -webkit-transform: rotate(156.6deg);
  transform: rotate(156.6deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="87"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="87"]::before {
  background-color: #47CF73;
}

.arc[data-value="88"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(158.4deg);
  -ms-transform: rotate(158.4deg);
  -webkit-transform: rotate(158.4deg);
  transform: rotate(158.4deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="88"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="88"]::before {
  background-color: #47CF73;
}

.arc[data-value="89"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(160.2deg);
  -ms-transform: rotate(160.2deg);
  -webkit-transform: rotate(160.2deg);
  transform: rotate(160.2deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="89"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="89"]::before {
  background-color: #47CF73;
}

.arc[data-value="90"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(162deg);
  -ms-transform: rotate(162deg);
  -webkit-transform: rotate(162deg);
  transform: rotate(162deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="90"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="90"]::before {
  background-color: #47CF73;
}

.arc[data-value="91"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(163.8deg);
  -ms-transform: rotate(163.8deg);
  -webkit-transform: rotate(163.8deg);
  transform: rotate(163.8deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="91"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="91"]::before {
  background-color: #47CF73;
}

.arc[data-value="92"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(165.6deg);
  -ms-transform: rotate(165.6deg);
  -webkit-transform: rotate(165.6deg);
  transform: rotate(165.6deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="92"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="92"]::before {
  background-color: #47CF73;
}

.arc[data-value="93"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(167.4deg);
  -ms-transform: rotate(167.4deg);
  -webkit-transform: rotate(167.4deg);
  transform: rotate(167.4deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="93"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="93"]::before {
  background-color: #47CF73;
}

.arc[data-value="94"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(169.2deg);
  -ms-transform: rotate(169.2deg);
  -webkit-transform: rotate(169.2deg);
  transform: rotate(169.2deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="94"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="94"]::before {
  background-color: #47CF73;
}

.arc[data-value="95"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(171deg);
  -ms-transform: rotate(171deg);
  -webkit-transform: rotate(171deg);
  transform: rotate(171deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="95"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="95"]::before {
  background-color: #47CF73;
}

.arc[data-value="96"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(172.8deg);
  -ms-transform: rotate(172.8deg);
  -webkit-transform: rotate(172.8deg);
  transform: rotate(172.8deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="96"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="96"]::before {
  background-color: #47CF73;
}

.arc[data-value="97"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(174.6deg);
  -ms-transform: rotate(174.6deg);
  -webkit-transform: rotate(174.6deg);
  transform: rotate(174.6deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="97"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="97"]::before {
  background-color: #47CF73;
}

.arc[data-value="98"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(176.4deg);
  -ms-transform: rotate(176.4deg);
  -webkit-transform: rotate(176.4deg);
  transform: rotate(176.4deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="98"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="98"]::before {
  background-color: #47CF73;
}

.arc[data-value="99"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(178.2deg);
  -ms-transform: rotate(178.2deg);
  -webkit-transform: rotate(178.2deg);
  transform: rotate(178.2deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="99"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="99"]::before {
  background-color: #47CF73;
}

.arc[data-value="100"] {
  -moz-animation: fill 2s;
  -webkit-animation: fill 2s;
  animation: fill 2s;
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
  transition: All 5s ease;
  border-color: #47CF73;
}
.arc[data-value="100"]:after {
  content: '';
  position: absolute;
  left: -40px;
  top: 5px;
}
.arc[data-value="100"]::before {
  background-color: #47CF73;
}

.arc[data-value="1"] {
  border-color: #FF3C41;
}
.arc[data-value="1"]::before {
  background-color: #FF3C41;
}

.arc[data-value="2"] {
  border-color: #FF3C41;
}
.arc[data-value="2"]::before {
  background-color: #FF3C41;
}

.arc[data-value="3"] {
  border-color: #FF3C41;
}
.arc[data-value="3"]::before {
  background-color: #FF3C41;
}

.arc[data-value="4"] {
  border-color: #FF3C41;
}
.arc[data-value="4"]::before {
  background-color: #FF3C41;
}

.arc[data-value="5"] {
  border-color: #FF3C41;
}
.arc[data-value="5"]::before {
  background-color: #FF3C41;
}

.arc[data-value="6"] {
  border-color: #FF3C41;
}
.arc[data-value="6"]::before {
  background-color: #FF3C41;
}

.arc[data-value="7"] {
  border-color: #FF3C41;
}
.arc[data-value="7"]::before {
  background-color: #FF3C41;
}

.arc[data-value="8"] {
  border-color: #FF3C41;
}
.arc[data-value="8"]::before {
  background-color: #FF3C41;
}

.arc[data-value="9"] {
  border-color: #FF3C41;
}
.arc[data-value="9"]::before {
  background-color: #FF3C41;
}

.arc[data-value="10"] {
  border-color: #FF3C41;
}
.arc[data-value="10"]::before {
  background-color: #FF3C41;
}

.arc[data-value="11"] {
  border-color: #FF3C41;
}
.arc[data-value="11"]::before {
  background-color: #FF3C41;
}

.arc[data-value="12"] {
  border-color: #FF3C41;
}
.arc[data-value="12"]::before {
  background-color: #FF3C41;
}

.arc[data-value="13"] {
  border-color: #FF3C41;
}
.arc[data-value="13"]::before {
  background-color: #FF3C41;
}

.arc[data-value="14"] {
  border-color: #FF3C41;
}
.arc[data-value="14"]::before {
  background-color: #FF3C41;
}

.arc[data-value="15"] {
  border-color: #FF3C41;
}
.arc[data-value="15"]::before {
  background-color: #FF3C41;
}

.arc[data-value="16"] {
  border-color: #FF3C41;
}
.arc[data-value="16"]::before {
  background-color: #FF3C41;
}

.arc[data-value="17"] {
  border-color: #FF3C41;
}
.arc[data-value="17"]::before {
  background-color: #FF3C41;
}

.arc[data-value="18"] {
  border-color: #FF3C41;
}
.arc[data-value="18"]::before {
  background-color: #FF3C41;
}

.arc[data-value="19"] {
  border-color: #FF3C41;
}
.arc[data-value="19"]::before {
  background-color: #FF3C41;
}

.arc[data-value="20"] {
  border-color: #FF3C41;
}
.arc[data-value="20"]::before {
  background-color: #FF3C41;
}

.arc[data-value="21"] {
  border-color: #FF3C41;
}
.arc[data-value="21"]::before {
  background-color: #FF3C41;
}

.arc[data-value="22"] {
  border-color: #FF3C41;
}
.arc[data-value="22"]::before {
  background-color: #FF3C41;
}

.arc[data-value="23"] {
  border-color: #FF3C41;
}
.arc[data-value="23"]::before {
  background-color: #FF3C41;
}

.arc[data-value="24"] {
  border-color: #FF3C41;
}
.arc[data-value="24"]::before {
  background-color: #FF3C41;
}

.arc[data-value="25"] {
  border-color: #FF3C41;
}
.arc[data-value="25"]::before {
  background-color: #FF3C41;
}

.arc[data-value="26"] {
  border-color: #FF3C41;
}
.arc[data-value="26"]::before {
  background-color: #FF3C41;
}

.arc[data-value="27"] {
  border-color: #FF3C41;
}
.arc[data-value="27"]::before {
  background-color: #FF3C41;
}

.arc[data-value="28"] {
  border-color: #FF3C41;
}
.arc[data-value="28"]::before {
  background-color: #FF3C41;
}

.arc[data-value="29"] {
  border-color: #FF3C41;
}
.arc[data-value="29"]::before {
  background-color: #FF3C41;
}

.arc[data-value="30"] {
  border-color: #FF3C41;
}
.arc[data-value="30"]::before {
  background-color: #FF3C41;
}

.arc[data-value="31"] {
  border-color: #FF3C41;
}
.arc[data-value="31"]::before {
  background-color: #FF3C41;
}

.arc[data-value="32"] {
  border-color: #FF3C41;
}
.arc[data-value="32"]::before {
  background-color: #FF3C41;
}

.arc[data-value="33"] {
  border-color: #FF3C41;
}
.arc[data-value="33"]::before {
  background-color: #FF3C41;
}

.arc[data-value="34"] {
  border-color: #FF3C41;
}
.arc[data-value="34"]::before {
  background-color: #FF3C41;
}

.arc[data-value="35"] {
  border-color: #FF3C41;
}
.arc[data-value="35"]::before {
  background-color: #FF3C41;
}

.arc[data-value="36"] {
  border-color: #FF3C41;
}
.arc[data-value="36"]::before {
  background-color: #FF3C41;
}

.arc[data-value="37"] {
  border-color: #FF3C41;
}
.arc[data-value="37"]::before {
  background-color: #FF3C41;
}

.arc[data-value="38"] {
  border-color: #FF3C41;
}
.arc[data-value="38"]::before {
  background-color: #FF3C41;
}

.arc[data-value="39"] {
  border-color: #FF3C41;
}
.arc[data-value="39"]::before {
  background-color: #FF3C41;
}

.arc[data-value="40"] {
  border-color: #FF3C41;
}
.arc[data-value="40"]::before {
  background-color: #FF3C41;
}

.arc[data-value="41"] {
  border-color: #FF3C41;
}
.arc[data-value="41"]::before {
  background-color: #FF3C41;
}

.arc[data-value="42"] {
  border-color: #FF3C41;
}
.arc[data-value="42"]::before {
  background-color: #FF3C41;
}

.arc[data-value="43"] {
  border-color: #FF3C41;
}
.arc[data-value="43"]::before {
  background-color: #FF3C41;
}

.arc[data-value="44"] {
  border-color: #FF3C41;
}
.arc[data-value="44"]::before {
  background-color: #FF3C41;
}

.arc[data-value="45"] {
  border-color: #FF3C41;
}
.arc[data-value="45"]::before {
  background-color: #FF3C41;
}

.arc[data-value="46"] {
  border-color: #FF3C41;
}
.arc[data-value="46"]::before {
  background-color: #FF3C41;
}

.arc[data-value="47"] {
  border-color: #FF3C41;
}
.arc[data-value="47"]::before {
  background-color: #FF3C41;
}

.arc[data-value="48"] {
  border-color: #FF3C41;
}
.arc[data-value="48"]::before {
  background-color: #FF3C41;
}

.arc[data-value="49"] {
  border-color: #FF3C41;
}
.arc[data-value="49"]::before {
  background-color: #FF3C41;
}

.arc[data-value="50"] {
  border-color: #FF3C41;
}
.arc[data-value="50"]::before {
  background-color: #FF3C41;
}

.arc[data-value="51"] {
  border-color: #FCD000;
}
.arc[data-value="51"]::before {
  background-color: #FCD000;
}

.arc[data-value="52"] {
  border-color: #FCD000;
}
.arc[data-value="52"]::before {
  background-color: #FCD000;
}

.arc[data-value="53"] {
  border-color: #FCD000;
}
.arc[data-value="53"]::before {
  background-color: #FCD000;
}

.arc[data-value="54"] {
  border-color: #FCD000;
}
.arc[data-value="54"]::before {
  background-color: #FCD000;
}

.arc[data-value="55"] {
  border-color: #FCD000;
}
.arc[data-value="55"]::before {
  background-color: #FCD000;
}

.arc[data-value="56"] {
  border-color: #FCD000;
}
.arc[data-value="56"]::before {
  background-color: #FCD000;
}

.arc[data-value="57"] {
  border-color: #FCD000;
}
.arc[data-value="57"]::before {
  background-color: #FCD000;
}

.arc[data-value="58"] {
  border-color: #FCD000;
}
.arc[data-value="58"]::before {
  background-color: #FCD000;
}

.arc[data-value="59"] {
  border-color: #FCD000;
}
.arc[data-value="59"]::before {
  background-color: #FCD000;
}

.arc[data-value="60"] {
  border-color: #FCD000;
}
.arc[data-value="60"]::before {
  background-color: #FCD000;
}

.arc[data-value="61"] {
  border-color: #FCD000;
}
.arc[data-value="61"]::before {
  background-color: #FCD000;
}

.arc[data-value="62"] {
  border-color: #FCD000;
}
.arc[data-value="62"]::before {
  background-color: #FCD000;
}

.arc[data-value="63"] {
  border-color: #FCD000;
}
.arc[data-value="63"]::before {
  background-color: #FCD000;
}

.arc[data-value="64"] {
  border-color: #FCD000;
}
.arc[data-value="64"]::before {
  background-color: #FCD000;
}

.arc[data-value="65"] {
  border-color: #FCD000;
}
.arc[data-value="65"]::before {
  background-color: #FCD000;
}

.arc[data-value="66"] {
  border-color: #FCD000;
}
.arc[data-value="66"]::before {
  background-color: #FCD000;
}

.arc[data-value="67"] {
  border-color: #FCD000;
}
.arc[data-value="67"]::before {
  background-color: #FCD000;
}

.arc[data-value="68"] {
  border-color: #FCD000;
}
.arc[data-value="68"]::before {
  background-color: #FCD000;
}

.arc[data-value="69"] {
  border-color: #FCD000;
}
.arc[data-value="69"]::before {
  background-color: #FCD000;
}

.arc[data-value="70"] {
  border-color: #FCD000;
}
.arc[data-value="70"]::before {
  background-color: #FCD000;
}

.arc[data-value="71"] {
  border-color: #FCD000;
}
.arc[data-value="71"]::before {
  background-color: #FCD000;
}

.arc[data-value="72"] {
  border-color: #FCD000;
}
.arc[data-value="72"]::before {
  background-color: #FCD000;
}

.arc[data-value="73"] {
  border-color: #FCD000;
}
.arc[data-value="73"]::before {
  background-color: #FCD000;
}

.arc[data-value="74"] {
  border-color: #FCD000;
}
.arc[data-value="74"]::before {
  background-color: #FCD000;
}

.arc[data-value="75"] {
  border-color: #FCD000;
}
.arc[data-value="75"]::before {
  background-color: #FCD000;
}

.arc[data-value="76"] {
  border-color: #FCD000;
}
.arc[data-value="76"]::before {
  background-color: #FCD000;
}

.arc[data-value="77"] {
  border-color: #FCD000;
}
.arc[data-value="77"]::before {
  background-color: #FCD000;
}

.arc[data-value="78"] {
  border-color: #FCD000;
}
.arc[data-value="78"]::before {
  background-color: #FCD000;
}

.arc[data-value="79"] {
  border-color: #FCD000;
}
.arc[data-value="79"]::before {
  background-color: #FCD000;
}

.arc[data-value="80"] {
  border-color: #FCD000;
}
.arc[data-value="80"]::before {
  background-color: #FCD000;
}

.legend {
  display: inline-block;
  width: 150px;
  vertical-align: text-bottom;
  margin-left: 100px;
  background-color: #f0f0f0;
}
.legend span {
  width: 20px;
  height: 20px;
  display: inline-block;
  margin: 0 10px 0 20px;
}
.legend span.green {
  background-color: #47CF73;
}
.legend span.orange {
  background-color: #FCD000;
}
.legend span.red {
  background-color: #FF3C41;
}

@-moz-keyframes fill {
  0% {
    -moz-transform: rotate(0deg);
    transform: rotate(0deg);
    border-color: #FF3C41;
  }
  50% {
    -moz-transform: rotate(180deg);
    transform: rotate(180deg);
    border-color: #47CF73;
  }
}
@-webkit-keyframes fill {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
    border-color: #FF3C41;
  }
  50% {
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
    border-color: #47CF73;
  }
}
@keyframes fill {
  0% {
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
    border-color: #FF3C41;
  }
  50% {
    -moz-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
    border-color: #47CF73;
  }
}


@media screen and (max-width: 768px) {
  h2.semi_pie {
    margin-left: 20px;
    font-size: 10px;
  }

  .container_semi_circle {
    /* display: inline-block; */
    /* margin: 30px 20px; */
    /* border:1px solid #f00; */
    margin: 0px auto;
    margin-top:20px;
  }
  .container_semi_circle .label-text {
    display: block;
    text-align: center;
    font-size: 12px;
    font-weight: bold;
    margin-bottom: 15px;
  }

  .pie-wrapper {
    position: relative;
    width: 80px;
    height: 40px;
    overflow: hidden;
    /* border:1px solid #f00; */
    margin: 0px auto;
  }
  .pie-wrapper .arc, .pie-wrapper:before {
    content: '';
    width: 80px;
    height: 40px;
    position: absolute;
    -ms-transform-origin: 50% 0%;
    -webkit-transform-origin: 50% 0%;
    transform-origin: 50% 0%;
    left: 0;
    box-sizing: border-box;
  }
  .pie-wrapper:before {
    border: 10px solid #E8E8E8;
    border-bottom: none;
    top: 0;
    z-index: 1;
    border-radius: 300px 300px 0 0;
  }
  .pie-wrapper .arc {
    border: 10px solid #47CF73;
    border-top: none;
    border-radius: 0 0 300px 300px;
    top: 100%;
    z-index: 2;
  }
  .pie-wrapper .arc::before {
    content: "";
    height: 1px;
    width: 5px;
    position: absolute;
    top: 0px;
  }
  .pie-wrapper .score2 {
    color: #394955;
    font-size: 12px;
    display: block;
    width: 80px;
    text-align: center;
    margin-top: 20px;
  }

  .arc[data-value="1"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(1.8deg);
    -ms-transform: rotate(1.8deg);
    -webkit-transform: rotate(1.8deg);
    transform: rotate(1.8deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="1"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="1"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="2"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(3.6deg);
    -ms-transform: rotate(3.6deg);
    -webkit-transform: rotate(3.6deg);
    transform: rotate(3.6deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="2"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="2"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="3"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(5.4deg);
    -ms-transform: rotate(5.4deg);
    -webkit-transform: rotate(5.4deg);
    transform: rotate(5.4deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="3"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="3"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="4"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(7.2deg);
    -ms-transform: rotate(7.2deg);
    -webkit-transform: rotate(7.2deg);
    transform: rotate(7.2deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="4"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="4"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="5"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(9deg);
    -ms-transform: rotate(9deg);
    -webkit-transform: rotate(9deg);
    transform: rotate(9deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="5"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="5"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="6"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(10.8deg);
    -ms-transform: rotate(10.8deg);
    -webkit-transform: rotate(10.8deg);
    transform: rotate(10.8deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="6"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="6"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="7"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(12.6deg);
    -ms-transform: rotate(12.6deg);
    -webkit-transform: rotate(12.6deg);
    transform: rotate(12.6deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="7"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="7"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="8"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(14.4deg);
    -ms-transform: rotate(14.4deg);
    -webkit-transform: rotate(14.4deg);
    transform: rotate(14.4deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="8"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="8"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="9"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(16.2deg);
    -ms-transform: rotate(16.2deg);
    -webkit-transform: rotate(16.2deg);
    transform: rotate(16.2deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="9"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="9"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="10"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(18deg);
    -ms-transform: rotate(18deg);
    -webkit-transform: rotate(18deg);
    transform: rotate(18deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="10"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="10"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="11"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(19.8deg);
    -ms-transform: rotate(19.8deg);
    -webkit-transform: rotate(19.8deg);
    transform: rotate(19.8deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="11"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="11"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="12"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(21.6deg);
    -ms-transform: rotate(21.6deg);
    -webkit-transform: rotate(21.6deg);
    transform: rotate(21.6deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="12"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="12"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="13"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(23.4deg);
    -ms-transform: rotate(23.4deg);
    -webkit-transform: rotate(23.4deg);
    transform: rotate(23.4deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="13"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="13"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="14"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(25.2deg);
    -ms-transform: rotate(25.2deg);
    -webkit-transform: rotate(25.2deg);
    transform: rotate(25.2deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="14"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="14"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="15"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(27deg);
    -ms-transform: rotate(27deg);
    -webkit-transform: rotate(27deg);
    transform: rotate(27deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="15"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="15"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="16"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(28.8deg);
    -ms-transform: rotate(28.8deg);
    -webkit-transform: rotate(28.8deg);
    transform: rotate(28.8deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="16"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="16"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="17"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(30.6deg);
    -ms-transform: rotate(30.6deg);
    -webkit-transform: rotate(30.6deg);
    transform: rotate(30.6deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="17"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="17"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="18"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(32.4deg);
    -ms-transform: rotate(32.4deg);
    -webkit-transform: rotate(32.4deg);
    transform: rotate(32.4deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="18"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="18"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="19"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(34.2deg);
    -ms-transform: rotate(34.2deg);
    -webkit-transform: rotate(34.2deg);
    transform: rotate(34.2deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="19"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="19"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="20"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(36deg);
    -ms-transform: rotate(36deg);
    -webkit-transform: rotate(36deg);
    transform: rotate(36deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="20"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="20"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="21"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(37.8deg);
    -ms-transform: rotate(37.8deg);
    -webkit-transform: rotate(37.8deg);
    transform: rotate(37.8deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="21"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="21"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="22"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(39.6deg);
    -ms-transform: rotate(39.6deg);
    -webkit-transform: rotate(39.6deg);
    transform: rotate(39.6deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="22"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="22"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="23"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(41.4deg);
    -ms-transform: rotate(41.4deg);
    -webkit-transform: rotate(41.4deg);
    transform: rotate(41.4deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="23"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="23"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="24"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(43.2deg);
    -ms-transform: rotate(43.2deg);
    -webkit-transform: rotate(43.2deg);
    transform: rotate(43.2deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="24"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="24"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="25"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="25"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="25"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="26"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(46.8deg);
    -ms-transform: rotate(46.8deg);
    -webkit-transform: rotate(46.8deg);
    transform: rotate(46.8deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="26"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="26"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="27"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(48.6deg);
    -ms-transform: rotate(48.6deg);
    -webkit-transform: rotate(48.6deg);
    transform: rotate(48.6deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="27"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="27"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="28"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(50.4deg);
    -ms-transform: rotate(50.4deg);
    -webkit-transform: rotate(50.4deg);
    transform: rotate(50.4deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="28"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="28"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="29"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(52.2deg);
    -ms-transform: rotate(52.2deg);
    -webkit-transform: rotate(52.2deg);
    transform: rotate(52.2deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="29"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="29"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="30"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(54deg);
    -ms-transform: rotate(54deg);
    -webkit-transform: rotate(54deg);
    transform: rotate(54deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="30"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="30"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="31"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(55.8deg);
    -ms-transform: rotate(55.8deg);
    -webkit-transform: rotate(55.8deg);
    transform: rotate(55.8deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="31"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="31"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="32"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(57.6deg);
    -ms-transform: rotate(57.6deg);
    -webkit-transform: rotate(57.6deg);
    transform: rotate(57.6deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="32"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="32"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="33"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(59.4deg);
    -ms-transform: rotate(59.4deg);
    -webkit-transform: rotate(59.4deg);
    transform: rotate(59.4deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="33"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="33"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="34"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(61.2deg);
    -ms-transform: rotate(61.2deg);
    -webkit-transform: rotate(61.2deg);
    transform: rotate(61.2deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="34"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="34"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="35"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(63deg);
    -ms-transform: rotate(63deg);
    -webkit-transform: rotate(63deg);
    transform: rotate(63deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="35"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="35"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="36"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(64.8deg);
    -ms-transform: rotate(64.8deg);
    -webkit-transform: rotate(64.8deg);
    transform: rotate(64.8deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="36"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="36"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="37"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(66.6deg);
    -ms-transform: rotate(66.6deg);
    -webkit-transform: rotate(66.6deg);
    transform: rotate(66.6deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="37"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="37"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="38"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(68.4deg);
    -ms-transform: rotate(68.4deg);
    -webkit-transform: rotate(68.4deg);
    transform: rotate(68.4deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="38"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="38"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="39"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(70.2deg);
    -ms-transform: rotate(70.2deg);
    -webkit-transform: rotate(70.2deg);
    transform: rotate(70.2deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="39"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="39"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="40"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(72deg);
    -ms-transform: rotate(72deg);
    -webkit-transform: rotate(72deg);
    transform: rotate(72deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="40"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="40"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="41"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(73.8deg);
    -ms-transform: rotate(73.8deg);
    -webkit-transform: rotate(73.8deg);
    transform: rotate(73.8deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="41"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="41"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="42"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(75.6deg);
    -ms-transform: rotate(75.6deg);
    -webkit-transform: rotate(75.6deg);
    transform: rotate(75.6deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="42"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="42"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="43"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(77.4deg);
    -ms-transform: rotate(77.4deg);
    -webkit-transform: rotate(77.4deg);
    transform: rotate(77.4deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="43"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="43"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="44"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(79.2deg);
    -ms-transform: rotate(79.2deg);
    -webkit-transform: rotate(79.2deg);
    transform: rotate(79.2deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="44"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="44"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="45"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(81deg);
    -ms-transform: rotate(81deg);
    -webkit-transform: rotate(81deg);
    transform: rotate(81deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="45"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="45"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="46"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(82.8deg);
    -ms-transform: rotate(82.8deg);
    -webkit-transform: rotate(82.8deg);
    transform: rotate(82.8deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="46"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="46"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="47"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(84.6deg);
    -ms-transform: rotate(84.6deg);
    -webkit-transform: rotate(84.6deg);
    transform: rotate(84.6deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="47"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="47"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="48"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(86.4deg);
    -ms-transform: rotate(86.4deg);
    -webkit-transform: rotate(86.4deg);
    transform: rotate(86.4deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="48"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="48"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="49"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(88.2deg);
    -ms-transform: rotate(88.2deg);
    -webkit-transform: rotate(88.2deg);
    transform: rotate(88.2deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="49"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="49"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="50"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="50"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="50"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="51"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(91.8deg);
    -ms-transform: rotate(91.8deg);
    -webkit-transform: rotate(91.8deg);
    transform: rotate(91.8deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="51"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="51"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="52"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(93.6deg);
    -ms-transform: rotate(93.6deg);
    -webkit-transform: rotate(93.6deg);
    transform: rotate(93.6deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="52"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="52"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="53"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(95.4deg);
    -ms-transform: rotate(95.4deg);
    -webkit-transform: rotate(95.4deg);
    transform: rotate(95.4deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="53"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="53"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="54"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(97.2deg);
    -ms-transform: rotate(97.2deg);
    -webkit-transform: rotate(97.2deg);
    transform: rotate(97.2deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="54"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="54"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="55"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(99deg);
    -ms-transform: rotate(99deg);
    -webkit-transform: rotate(99deg);
    transform: rotate(99deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="55"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="55"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="56"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(100.8deg);
    -ms-transform: rotate(100.8deg);
    -webkit-transform: rotate(100.8deg);
    transform: rotate(100.8deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="56"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="56"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="57"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(102.6deg);
    -ms-transform: rotate(102.6deg);
    -webkit-transform: rotate(102.6deg);
    transform: rotate(102.6deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="57"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="57"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="58"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(104.4deg);
    -ms-transform: rotate(104.4deg);
    -webkit-transform: rotate(104.4deg);
    transform: rotate(104.4deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="58"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="58"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="59"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(106.2deg);
    -ms-transform: rotate(106.2deg);
    -webkit-transform: rotate(106.2deg);
    transform: rotate(106.2deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="59"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="59"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="60"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(108deg);
    -ms-transform: rotate(108deg);
    -webkit-transform: rotate(108deg);
    transform: rotate(108deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="60"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="60"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="61"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(109.8deg);
    -ms-transform: rotate(109.8deg);
    -webkit-transform: rotate(109.8deg);
    transform: rotate(109.8deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="61"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="61"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="62"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(111.6deg);
    -ms-transform: rotate(111.6deg);
    -webkit-transform: rotate(111.6deg);
    transform: rotate(111.6deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="62"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="62"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="63"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(113.4deg);
    -ms-transform: rotate(113.4deg);
    -webkit-transform: rotate(113.4deg);
    transform: rotate(113.4deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="63"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="63"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="64"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(115.2deg);
    -ms-transform: rotate(115.2deg);
    -webkit-transform: rotate(115.2deg);
    transform: rotate(115.2deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="64"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="64"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="65"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(117deg);
    -ms-transform: rotate(117deg);
    -webkit-transform: rotate(117deg);
    transform: rotate(117deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="65"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="65"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="66"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(118.8deg);
    -ms-transform: rotate(118.8deg);
    -webkit-transform: rotate(118.8deg);
    transform: rotate(118.8deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="66"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="66"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="67"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(120.6deg);
    -ms-transform: rotate(120.6deg);
    -webkit-transform: rotate(120.6deg);
    transform: rotate(120.6deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="67"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="67"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="68"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(122.4deg);
    -ms-transform: rotate(122.4deg);
    -webkit-transform: rotate(122.4deg);
    transform: rotate(122.4deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="68"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="68"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="69"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(124.2deg);
    -ms-transform: rotate(124.2deg);
    -webkit-transform: rotate(124.2deg);
    transform: rotate(124.2deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="69"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="69"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="70"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(126deg);
    -ms-transform: rotate(126deg);
    -webkit-transform: rotate(126deg);
    transform: rotate(126deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="70"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="70"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="71"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(127.8deg);
    -ms-transform: rotate(127.8deg);
    -webkit-transform: rotate(127.8deg);
    transform: rotate(127.8deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="71"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="71"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="72"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(129.6deg);
    -ms-transform: rotate(129.6deg);
    -webkit-transform: rotate(129.6deg);
    transform: rotate(129.6deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="72"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="72"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="73"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(131.4deg);
    -ms-transform: rotate(131.4deg);
    -webkit-transform: rotate(131.4deg);
    transform: rotate(131.4deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="73"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="73"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="74"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(133.2deg);
    -ms-transform: rotate(133.2deg);
    -webkit-transform: rotate(133.2deg);
    transform: rotate(133.2deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="74"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="74"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="75"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(135deg);
    -ms-transform: rotate(135deg);
    -webkit-transform: rotate(135deg);
    transform: rotate(135deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="75"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="75"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="76"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(136.8deg);
    -ms-transform: rotate(136.8deg);
    -webkit-transform: rotate(136.8deg);
    transform: rotate(136.8deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="76"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="76"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="77"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(138.6deg);
    -ms-transform: rotate(138.6deg);
    -webkit-transform: rotate(138.6deg);
    transform: rotate(138.6deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="77"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="77"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="78"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(140.4deg);
    -ms-transform: rotate(140.4deg);
    -webkit-transform: rotate(140.4deg);
    transform: rotate(140.4deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="78"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="78"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="79"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(142.2deg);
    -ms-transform: rotate(142.2deg);
    -webkit-transform: rotate(142.2deg);
    transform: rotate(142.2deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="79"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="79"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="80"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(144deg);
    -ms-transform: rotate(144deg);
    -webkit-transform: rotate(144deg);
    transform: rotate(144deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="80"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="80"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="81"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(145.8deg);
    -ms-transform: rotate(145.8deg);
    -webkit-transform: rotate(145.8deg);
    transform: rotate(145.8deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="81"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="81"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="82"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(147.6deg);
    -ms-transform: rotate(147.6deg);
    -webkit-transform: rotate(147.6deg);
    transform: rotate(147.6deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="82"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="82"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="83"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(149.4deg);
    -ms-transform: rotate(149.4deg);
    -webkit-transform: rotate(149.4deg);
    transform: rotate(149.4deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="83"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="83"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="84"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(151.2deg);
    -ms-transform: rotate(151.2deg);
    -webkit-transform: rotate(151.2deg);
    transform: rotate(151.2deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="84"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="84"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="85"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(153deg);
    -ms-transform: rotate(153deg);
    -webkit-transform: rotate(153deg);
    transform: rotate(153deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="85"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="85"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="86"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(154.8deg);
    -ms-transform: rotate(154.8deg);
    -webkit-transform: rotate(154.8deg);
    transform: rotate(154.8deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="86"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="86"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="87"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(156.6deg);
    -ms-transform: rotate(156.6deg);
    -webkit-transform: rotate(156.6deg);
    transform: rotate(156.6deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="87"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="87"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="88"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(158.4deg);
    -ms-transform: rotate(158.4deg);
    -webkit-transform: rotate(158.4deg);
    transform: rotate(158.4deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="88"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="88"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="89"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(160.2deg);
    -ms-transform: rotate(160.2deg);
    -webkit-transform: rotate(160.2deg);
    transform: rotate(160.2deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="89"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="89"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="90"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(162deg);
    -ms-transform: rotate(162deg);
    -webkit-transform: rotate(162deg);
    transform: rotate(162deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="90"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="90"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="91"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(163.8deg);
    -ms-transform: rotate(163.8deg);
    -webkit-transform: rotate(163.8deg);
    transform: rotate(163.8deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="91"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="91"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="92"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(165.6deg);
    -ms-transform: rotate(165.6deg);
    -webkit-transform: rotate(165.6deg);
    transform: rotate(165.6deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="92"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="92"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="93"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(167.4deg);
    -ms-transform: rotate(167.4deg);
    -webkit-transform: rotate(167.4deg);
    transform: rotate(167.4deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="93"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="93"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="94"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(169.2deg);
    -ms-transform: rotate(169.2deg);
    -webkit-transform: rotate(169.2deg);
    transform: rotate(169.2deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="94"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="94"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="95"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(171deg);
    -ms-transform: rotate(171deg);
    -webkit-transform: rotate(171deg);
    transform: rotate(171deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="95"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="95"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="96"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(172.8deg);
    -ms-transform: rotate(172.8deg);
    -webkit-transform: rotate(172.8deg);
    transform: rotate(172.8deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="96"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="96"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="97"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(174.6deg);
    -ms-transform: rotate(174.6deg);
    -webkit-transform: rotate(174.6deg);
    transform: rotate(174.6deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="97"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="97"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="98"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(176.4deg);
    -ms-transform: rotate(176.4deg);
    -webkit-transform: rotate(176.4deg);
    transform: rotate(176.4deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="98"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="98"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="99"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(178.2deg);
    -ms-transform: rotate(178.2deg);
    -webkit-transform: rotate(178.2deg);
    transform: rotate(178.2deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="99"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="99"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="100"] {
    -moz-animation: fill 2s;
    -webkit-animation: fill 2s;
    animation: fill 2s;
    -moz-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
    transition: All 5s ease;
    border-color: #47CF73;
  }
  .arc[data-value="100"]:after {
    content: '';
    position: absolute;
    left: -40px;
    top: 5px;
  }
  .arc[data-value="100"]::before {
    background-color: #47CF73;
  }

  .arc[data-value="1"] {
    border-color: #FF3C41;
  }
  .arc[data-value="1"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="2"] {
    border-color: #FF3C41;
  }
  .arc[data-value="2"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="3"] {
    border-color: #FF3C41;
  }
  .arc[data-value="3"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="4"] {
    border-color: #FF3C41;
  }
  .arc[data-value="4"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="5"] {
    border-color: #FF3C41;
  }
  .arc[data-value="5"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="6"] {
    border-color: #FF3C41;
  }
  .arc[data-value="6"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="7"] {
    border-color: #FF3C41;
  }
  .arc[data-value="7"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="8"] {
    border-color: #FF3C41;
  }
  .arc[data-value="8"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="9"] {
    border-color: #FF3C41;
  }
  .arc[data-value="9"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="10"] {
    border-color: #FF3C41;
  }
  .arc[data-value="10"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="11"] {
    border-color: #FF3C41;
  }
  .arc[data-value="11"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="12"] {
    border-color: #FF3C41;
  }
  .arc[data-value="12"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="13"] {
    border-color: #FF3C41;
  }
  .arc[data-value="13"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="14"] {
    border-color: #FF3C41;
  }
  .arc[data-value="14"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="15"] {
    border-color: #FF3C41;
  }
  .arc[data-value="15"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="16"] {
    border-color: #FF3C41;
  }
  .arc[data-value="16"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="17"] {
    border-color: #FF3C41;
  }
  .arc[data-value="17"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="18"] {
    border-color: #FF3C41;
  }
  .arc[data-value="18"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="19"] {
    border-color: #FF3C41;
  }
  .arc[data-value="19"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="20"] {
    border-color: #FF3C41;
  }
  .arc[data-value="20"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="21"] {
    border-color: #FF3C41;
  }
  .arc[data-value="21"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="22"] {
    border-color: #FF3C41;
  }
  .arc[data-value="22"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="23"] {
    border-color: #FF3C41;
  }
  .arc[data-value="23"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="24"] {
    border-color: #FF3C41;
  }
  .arc[data-value="24"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="25"] {
    border-color: #FF3C41;
  }
  .arc[data-value="25"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="26"] {
    border-color: #FF3C41;
  }
  .arc[data-value="26"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="27"] {
    border-color: #FF3C41;
  }
  .arc[data-value="27"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="28"] {
    border-color: #FF3C41;
  }
  .arc[data-value="28"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="29"] {
    border-color: #FF3C41;
  }
  .arc[data-value="29"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="30"] {
    border-color: #FF3C41;
  }
  .arc[data-value="30"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="31"] {
    border-color: #FF3C41;
  }
  .arc[data-value="31"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="32"] {
    border-color: #FF3C41;
  }
  .arc[data-value="32"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="33"] {
    border-color: #FF3C41;
  }
  .arc[data-value="33"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="34"] {
    border-color: #FF3C41;
  }
  .arc[data-value="34"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="35"] {
    border-color: #FF3C41;
  }
  .arc[data-value="35"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="36"] {
    border-color: #FF3C41;
  }
  .arc[data-value="36"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="37"] {
    border-color: #FF3C41;
  }
  .arc[data-value="37"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="38"] {
    border-color: #FF3C41;
  }
  .arc[data-value="38"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="39"] {
    border-color: #FF3C41;
  }
  .arc[data-value="39"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="40"] {
    border-color: #FF3C41;
  }
  .arc[data-value="40"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="41"] {
    border-color: #FF3C41;
  }
  .arc[data-value="41"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="42"] {
    border-color: #FF3C41;
  }
  .arc[data-value="42"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="43"] {
    border-color: #FF3C41;
  }
  .arc[data-value="43"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="44"] {
    border-color: #FF3C41;
  }
  .arc[data-value="44"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="45"] {
    border-color: #FF3C41;
  }
  .arc[data-value="45"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="46"] {
    border-color: #FF3C41;
  }
  .arc[data-value="46"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="47"] {
    border-color: #FF3C41;
  }
  .arc[data-value="47"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="48"] {
    border-color: #FF3C41;
  }
  .arc[data-value="48"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="49"] {
    border-color: #FF3C41;
  }
  .arc[data-value="49"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="50"] {
    border-color: #FF3C41;
  }
  .arc[data-value="50"]::before {
    background-color: #FF3C41;
  }

  .arc[data-value="51"] {
    border-color: #FCD000;
  }
  .arc[data-value="51"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="52"] {
    border-color: #FCD000;
  }
  .arc[data-value="52"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="53"] {
    border-color: #FCD000;
  }
  .arc[data-value="53"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="54"] {
    border-color: #FCD000;
  }
  .arc[data-value="54"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="55"] {
    border-color: #FCD000;
  }
  .arc[data-value="55"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="56"] {
    border-color: #FCD000;
  }
  .arc[data-value="56"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="57"] {
    border-color: #FCD000;
  }
  .arc[data-value="57"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="58"] {
    border-color: #FCD000;
  }
  .arc[data-value="58"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="59"] {
    border-color: #FCD000;
  }
  .arc[data-value="59"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="60"] {
    border-color: #FCD000;
  }
  .arc[data-value="60"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="61"] {
    border-color: #FCD000;
  }
  .arc[data-value="61"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="62"] {
    border-color: #FCD000;
  }
  .arc[data-value="62"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="63"] {
    border-color: #FCD000;
  }
  .arc[data-value="63"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="64"] {
    border-color: #FCD000;
  }
  .arc[data-value="64"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="65"] {
    border-color: #FCD000;
  }
  .arc[data-value="65"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="66"] {
    border-color: #FCD000;
  }
  .arc[data-value="66"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="67"] {
    border-color: #FCD000;
  }
  .arc[data-value="67"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="68"] {
    border-color: #FCD000;
  }
  .arc[data-value="68"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="69"] {
    border-color: #FCD000;
  }
  .arc[data-value="69"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="70"] {
    border-color: #FCD000;
  }
  .arc[data-value="70"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="71"] {
    border-color: #FCD000;
  }
  .arc[data-value="71"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="72"] {
    border-color: #FCD000;
  }
  .arc[data-value="72"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="73"] {
    border-color: #FCD000;
  }
  .arc[data-value="73"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="74"] {
    border-color: #FCD000;
  }
  .arc[data-value="74"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="75"] {
    border-color: #FCD000;
  }
  .arc[data-value="75"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="76"] {
    border-color: #FCD000;
  }
  .arc[data-value="76"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="77"] {
    border-color: #FCD000;
  }
  .arc[data-value="77"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="78"] {
    border-color: #FCD000;
  }
  .arc[data-value="78"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="79"] {
    border-color: #FCD000;
  }
  .arc[data-value="79"]::before {
    background-color: #FCD000;
  }

  .arc[data-value="80"] {
    border-color: #FCD000;
  }
  .arc[data-value="80"]::before {
    background-color: #FCD000;
  }

  .legend {
    display: inline-block;
    width: 100px;
    vertical-align: text-bottom;
    margin-left: 100px;
    background-color: #f0f0f0;
  }
  .legend span {
    width: 20px;
    height: 20px;
    display: inline-block;
    margin: 0 10px 0 20px;
  }
}

</style>
<?php
  /**
   * $dashboard_id
   * 
   */
  // $dashboard_id=7;
   $monitor_id = array();
   $data_show = array();
   $label_name = array();
   $label_color_code = array();
   $sql_sub   = "SELECT monitor_id,label_name,label_color_code
	                  FROM dashboard_item_sub_data WHERE dashboard_item_id ='{$dashboard_id}';";
   $rs_sub    = select($sql_sub,$db);
  //  print_r($rs_sub);
   if(count($rs_sub)>0){
      for($j=0;$j<count($rs_sub);$j++){
        $monitor_id[] = $rs_sub[$j]->monitor_id;
        $label_name[$rs_sub[$j]->monitor_id][]        = $rs_sub[$j]->label_name;
        $label_color_code[$rs_sub[$j]->monitor_id][]  = $rs_sub[$j]->label_color_code;
      }
   }
  //  print_r($monitor_id);exit;
  //  echo join(",",$monitor_id);exit;
  $monitor_id_x  = join(",",$monitor_id);
   $sql_monitor ="SELECT monitor_id, group_id, device_id, type_id, is_min, min_value, is_max, max_value, is_input_digi, is_digital_zero, is_line, input_line, is_email, input_email, is_sms, input_sms, createtime, updatetime, status, list_time_of_work,is_condition, config_value_1, config_value_2, config_value_3, config_value_4,is_analog_min_work,is_analog_max_work,datax_id,datax_value,monitor_name,is_digital_work
                FROM page_data_manage_monitor  WHERE status='1' AND monitor_id in({$monitor_id_x}) ORDER BY monitor_id DESC,sort ASC;";
                // echo $sql_monitor;exit;
  $rs_monitor = select($sql_monitor,$db);
  if(count($rs_monitor)>0){
    $sql_sel_datax  = "SELECT datax_id, datax_name, create_time, update_time, sort, status
                            FROM page_data_manage_datax WHERE status='1' ORDER BY datax_id ASC,sort ASC;";
      $rs_sel_datax   = select($sql_sel_datax,$db);
      $array_datax    = array();
      if(count($rs_sel_datax)>0){
        for($j=0;$j<count($rs_sel_datax);$j++){
          $array_datax[$rs_sel_datax[$j]->datax_id] = $rs_sel_datax[$j]->datax_name;
        }
      }
      for($j=0;$j<count($rs_monitor);$j++){
          $sql_get_datax_from_volte_censor = "SELECT a.name as device,a.location as group,a.\"".strtoupper($array_datax[$rs_monitor[$j]->datax_id])."\" as datax
                FROM volte_censor a
                LEFT JOIN page_data_manage_device b ON a.name = b.divice_name
                LEFT JOIN page_data_manage_group c ON a.location = c.value_map_volte_censor
              WHERE b.device_id='{$rs_monitor[$j]->device_id}' AND c.group_id ='{$rs_monitor[$j]->group_id}'
              ORDER BY a.id DESC LIMIT 1;
            ";
            $rs_get_datax_from_volte_censor = select($sql_get_datax_from_volte_censor,$db);
            if(count($rs_get_datax_from_volte_censor)=='1' && $rs_get_datax_from_volte_censor[0]->datax != ""){
              $data_show[$rs_monitor[$j]->monitor_id][]  = $rs_get_datax_from_volte_censor[0]->datax;
            }else{
              $data_show[$rs_monitor[$j]->monitor_id][]  = 0;
            } 
      }
  }
  // print_r($data_show);
  // print_r($label_color_code);
  // print_r($label_name);
  // print_r($monitor_id);
  if(count($monitor_id)>0){
    for($j=0;$j<count($monitor_id);$j++){
      $temp_value = $data_show[$monitor_id[$j]][0];
      $label_name_show = $label_name[$monitor_id[$j]][0];
    }
  }
  // print_r($temp_value);
  // exit;

  // $temp_value = $data_show[0];
?>
<div class="w-11/12 
            xl:w-[16%] 
            min-[320px]:w-[25.9%] min-[320px]:min-h-[100px]
            xl:min-h-[309px] 
            bg-white rounded-lg shadow dark:bg-gray-800 m-3 float-left justify-center">
  <h2 class="semi_pie"><?php echo $item_name;?><?php echo $branch_name;?></h2>
  <div class="container_semi_circle">
    <!-- <span class="label-text">Mon, Tue, Wed</span> -->
    <div class="pie-wrapper">
      <div class="arc" data-value="<?php echo number_format($temp_value,0);?>"></div>
      <span class="score2"><?php echo number_format($temp_value,2);?> C°</span>
    </div>
  </div>  

</div>
<?php
 /**
  * clear data
  */
  $label_name_show = "";
  $temp_value = 0;

?>

<!--https://codepen.io/nourabusoud/pen/YXvOVm-->

<script>

</script>
