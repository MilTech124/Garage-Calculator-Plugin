<template>
  <section id="first" v-show="currentPage === 1">
    <div id="rozmiary" class="flex sb">
      <!-- ROZMIARY  -->
      <div class="flex-col">
        <p>Szerokość</p>
        <img :src="Image + 'width.svg'" alt="width" />
        <select required v-model="width">
          <option value="" disabled selected>Wybierz opcje</option>
          <option v-for="rozmiar in rozmiary" :key="rozmiar">
            {{ rozmiar }}m
          </option>
        </select>
      </div>
      <div class="flex-col">
        <p>Długość</p>
        <img :src="Image + 'length.svg'" alt="length" />
        <select required v-model="length">
          <option value="" disabled selected>Wybierz opcje</option>
          <option v-for="rozmiar in rozmiary" :key="rozmiar">
            {{ rozmiar }}m
          </option>
        </select>
      </div>
      <div class="flex-col">
        <p>Wysokość</p>
        <img :src="Image + 'height.svg'" alt="height" />
        <select placeholder="wpisz w cm" required v-model="height">
          <option value="" disabled selected>Wybierz opcje</option>
          <option v-for="wysokosc in wysokosci" :key="wysokosc">
            {{ wysokosc }} cm
          </option>
        </select>
      </div>
    </div>
    <!-- ROZMIARY  -->
    <!-- RODZAJ DACHU -->
    <div id="dach">
      <div class="flex sb">
        <div
          class="rodzaj-dachu"
          :class="{ activebg: typeRoof === 'Dach przod-tyl' }"
          @click="setTypeRoof('Dach przod-tyl')"
        >
          <img :src="Image + 'dwuspadowy.png'" width="250" alt="" />
          <p class="">Dwuspadowy<br />przod-tył</p>
        </div>
        <div
          class="rodzaj-dachu"
          :class="{ activebg: typeRoof === 'Dach lewo-prawo' }"
          @click="setTypeRoof('Dach lewo-prawo')"
        >
          <img :src="Image + 'dwuspadowy-lewo-prawo.png'" width="250" alt="" />
          <p class="">Dwuspadowy<br />lewo-prawo</p>
        </div>
        <div
          class="rodzaj-dachu"
          :class="{ activebg: typeRoof === 'Dach spad prawy' }"
          @click="setTypeRoof('Dach spad prawy')"
        >
          <img :src="Image + 'spadprawy.png'" width="250" alt="" />
          <p class="">Jednospadowy<br />prawy</p>
        </div>
      </div>
      <div class="center flex sb">
        <div
          class="rodzaj-dachu"
          :class="{ activebg: typeRoof === 'Dach spad tyl' }"
          @click="setTypeRoof('Dach spad tyl')"
        >
          <img :src="Image + 'tyl.png'" width="250" alt="" />
          <p class="">Jednospadowy<br />tył</p>
        </div>
        <div
          class="rodzaj-dachu"
          :class="{ activebg: typeRoof === 'Dach spad przod' }"
          @click="setTypeRoof('Dach spad przod')"
        >
          <img :src="Image + 'przod.png'" width="250" alt="" />
          <p class="">Jednospadowy<br />przod</p>
        </div>
        <div
          class="rodzaj-dachu"
          :class="{ activebg: typeRoof === 'Dach spad lewy' }"
          @click="setTypeRoof('Dach spad lewy')"
        >
          <img :src="Image + 'spadlewy.png'" width="250" alt="" />
          <p class="">Jednospadowy<br />lewy</p>
        </div>
      </div>
    </div>
    <!-- RODZAJ DACHU -->
  </section>
  <section id="second" v-show="currentPage === 2">
    <h2>Kolor i rodzaj poszycia scian</h2>
    <div class="flex sb spacer">
      <div
        class="drewno"
        :class="{ activebg: colorWall === 'zlotydab' }"
        @click="setColorWall('zlotydab')"
      >
        <img :src="Image + 'zlotydab.png'" alt="drewno" />
        <p>Złoty Dąb</p>
      </div>
      <div
        class="drewno"
        :class="{ activebg: colorWall === 'orzech' }"
        @click="setColorWall('orzech')"
      >
        <img :src="Image + 'orzech.png'" alt="drewno" />
        <p>Orzech</p>
      </div>
    </div>
    <div class="flex sb spacer">
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorWall === 'biala' }"
        @click="setColorWall('biala')"
      >
        <img :src="Image + 'biala.png'" alt="blacha" />
        <p class="blacha-title">Biały</p>
        <p class="blacha-sm">RAL 9010</p>
      </div>
      <!-- KOLOR -->
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorWall === 'szarobialy' }"
        @click="setColorWall('szarobialy')"
      >
        <img :src="Image + 'szarobialy.png'" alt="blacha" />
        <p class="blacha-title">Szaro-biały</p>
        <p class="blacha-sm">RAL 9002</p>
      </div>
      <!-- KOLOR -->
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorWall === 'braz' }"
        @click="setColorWall('braz')"
      >
        <img :src="Image + 'braz.png'" alt="blacha" />
        <p class="blacha-title">Brąz</p>
        <p class="blacha-sm">RAL 8017</p>
      </div>
      <!-- KOLOR -->
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorWall === 'grafit' }"
        @click="setColorWall('grafit')"
      >
        <img :src="Image + 'grafit.png'" alt="blacha" />
        <p class="blacha-title">Grafit</p>
        <p class="blacha-sm">RAL 7016</p>
      </div>
      <!-- KOLOR -->
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorWall === 'srebrny' }"
        @click="setColorWall('srebrny')"
      >
        <img :src="Image + 'srebrny.png'" alt="blacha" />
        <p class="blacha-title">Srebrny</p>
        <p class="blacha-sm">RAL 9006</p>
      </div>
      <!-- KOLOR -->
    </div>
    <div class="flex sb spacer">
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorWall === 'ciemnygrafit' }"
        @click="setColorWall('ciemnygrafit')"
      >
        <img :src="Image + 'ciemnygrafit.png'" alt="blacha" />
        <p class="blacha-title">Ciemny Grafit</p>
        <p class="blacha-sm">RAL 7024</p>
      </div>
      <!-- KOLOR -->
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorWall === 'zielony' }"
        @click="setColorWall('zielony')"
      >
        <img :src="Image + 'zielony.png'" alt="blacha" />
        <p class="blacha-title">Zielony</p>
        <p class="blacha-sm">RAL 6020</p>
      </div>
      <!-- KOLOR -->
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorWall === 'wisnia' }"
        @click="setColorWall('wisnia')"
      >
        <img :src="Image + 'wisnia.png'" alt="blacha" />
        <p class="blacha-title">Wiśnia</p>
        <p class="blacha-sm">RAL 3011</p>
      </div>
      <!-- KOLOR -->
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorWall === 'piasek' }"
        @click="setColorWall('piasek')"
      >
        <img :src="Image + 'piasek.png'" alt="blacha" />
        <p class="blacha-title">Piasek</p>
        <p class="blacha-sm">RAL 1002</p>
      </div>
      <!-- KOLOR -->
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorWall === 'ocynk' }"
        @click="setColorWall('ocynk')"
      >
        <img :src="Image + 'ocynk.png'" alt="blacha" />
        <p class="blacha-title">Ocynk</p>
      </div>
      <!-- KOLOR -->
    </div>
    <h4>Przetłoczenia poszycia scian:</h4>
    <div class="flex sb spacer">
      <!-- Przetłoczenia -->
      <div
        class="blacha"
        :class="{ activebg: przetloczenie === 'pion' }"
        @click="setPrzetloczenie('pion')"
      >
        <img :src="Image + 'pion.png'" alt="blacha" />
        <p class="blacha-title">Pionowe</p>
      </div>
      <!-- Przetłoczenia -->
      <!-- Przetłoczenia -->
      <div
        class="blacha"
        :class="{ activebg: przetloczenie === 'poziom' }"
        @click="setPrzetloczenie('poziom')"
      >
        <img :src="Image + 'poziom.png'" alt="blacha" />
        <p class="blacha-title">Poziome</p>
      </div>
      <!-- Przetłoczenia -->
    </div>
  </section>
  <section id="third" v-show="currentPage === 3">
    <h2>Kolor i rodzaj dachu</h2>
    <div class="flex sb spacer">
      <!-- KOLOR -->
      <div
        class="drewno"
        :class="{ activebg: colorRoof === 'zlotydab' }"
        @click="setColorRoof('zlotydab')"
      >
        <img :src="Image + 'zlotydab.png'" alt="drewno" />
        <p>Złoty Dąb</p>
      </div>
      <!-- KOLOR -->
      <div
        class="drewno"
        :class="{ activebg: colorRoof === 'orzech' }"
        @click="setColorRoof('orzech')"
      >
        <img :src="Image + 'orzech.png'" alt="drewno" />
        <p>Orzech</p>
      </div>
    </div>
    <div class="flex sb spacer">
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorRoof === 'biala' }"
        @click="setColorRoof('biala')"
      >
        <img :src="Image + 'biala.png'" alt="blacha" />
        <p class="blacha-title">Biały</p>
        <p class="blacha-sm">RAL 9010</p>
      </div>
      <!-- KOLOR -->
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorRoof === 'szarobialy' }"
        @click="setColorRoof('szarobialy')"
      >
        <img :src="Image + 'szarobialy.png'" alt="blacha" />
        <p class="blacha-title">Szaro-biały</p>
        <p class="blacha-sm">RAL 9002</p>
      </div>
      <!-- KOLOR -->
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorRoof === 'braz' }"
        @click="setColorRoof('braz')"
      >
        <img :src="Image + 'braz.png'" alt="blacha" />
        <p class="blacha-title">Brąz</p>
        <p class="blacha-sm">RAL 8017</p>
      </div>
      <!-- KOLOR -->
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorRoof === 'grafit' }"
        @click="setColorRoof('grafit')"
      >
        <img :src="Image + 'grafit.png'" alt="blacha" />
        <p class="blacha-title">Grafit</p>
        <p class="blacha-sm">RAL 7016</p>
      </div>
      <!-- KOLOR -->
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorRoof === 'srebrny' }"
        @click="setColorRoof('srebrny')"
      >
        <img :src="Image + 'srebrny.png'" alt="blacha" />
        <p class="blacha-title">Srebrny</p>
        <p class="blacha-sm">RAL 9006</p>
      </div>
      <!-- KOLOR -->
    </div>
    <div class="flex sb spacer">
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorRoof === 'ciemnygrafit' }"
        @click="setColorRoof('ciemnygrafit')"
      >
        <img :src="Image + 'ciemnygrafit.png'" alt="blacha" />
        <p class="blacha-title">Ciemny Grafit</p>
        <p class="blacha-sm">RAL 7024</p>
      </div>
      <!-- KOLOR -->
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorRoof === 'zielony' }"
        @click="setColorRoof('zielony')"
      >
        <img :src="Image + 'zielony.png'" alt="blacha" />
        <p class="blacha-title">Zielony</p>
        <p class="blacha-sm">RAL 6020</p>
      </div>
      <!-- KOLOR -->
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorRoof === 'wisnia' }"
        @click="setColorRoof('wisnia')"
      >
        <img :src="Image + 'wisnia.png'" alt="blacha" />
        <p class="blacha-title">Wiśnia</p>
        <p class="blacha-sm">RAL 3011</p>
      </div>
      <!-- KOLOR -->
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorRoof === 'piasek' }"
        @click="setColorRoof('piasek')"
      >
        <img :src="Image + 'piasek.png'" alt="blacha" />
        <p class="blacha-title">Piasek</p>
        <p class="blacha-sm">RAL 1002</p>
      </div>
      <!-- KOLOR -->
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorRoof === 'ocynk' }"
        @click="setColorWall('ocynk')"
      >
        <img :src="Image + 'ocynk.png'" alt="blacha" />
        <p class="blacha-title">Ocynk</p>
      </div>
      <!-- KOLOR -->
    </div>
    <h4>Rodzaj dachu:</h4>
    <div class="flex sb spacer">
      <!-- RODZAJ BLACHY DACH -->
      <div
        class="blacha"
        :class="{ activebg: materialOfRoof === 'trapezowa' }"
        @click="() => (materialOfRoof = 'trapezowa')"
      >
        <img :src="Image + 'trapezowa.png'" alt="blacha" />
        <p class="blacha-title">Trapezowa</p>
      </div>
      <!-- RODZAJ BLACHY DACH -->
      <!-- RODZAJ BLACHY DACH -->
      <div
        class="blacha"
        :class="{ activebg: materialOfRoof === 'blachodachowka' }"
        @click="() => (materialOfRoof = 'blachodachowka')"
      >
        <img :src="Image + 'blachodachowka.png'" alt="blacha" />
        <p class="blacha-title">Blachodachówka</p>
      </div>
      <!-- RODZAJ BLACHY DACH -->
    </div>
  </section>
  <section id="fourth" v-show="currentPage === 4">
    <h2>Kolor oraz rodzaj bramy</h2>
    <!-- TYP BRAMY -->
    <div class="gate-type">
      <div
        class="gate"
        :class="{ activebg: typeGate === 'Dwuskrzydlowa' }"
        @click="setTypeGate('Dwuskrzydlowa')"
      >
        <img :src="Image + 'garge_door.svg'" alt="drewno" />
        <p>Dwuskrzydłowa</p>
      </div>
      <div
        class="gate"
        :class="{ activebg: typeGate === 'Uchylna' }"
        @click="setTypeGate('Uchylna')"
      >
        <img :src="Image + 'uchylna.svg'" alt="drewno" />
        <p>Uchylna</p>
      </div>
      <div
        class="gate"
        :class="{ activebg: typeGate === 'Bez' }"
        @click="setTypeGate('Bez')"
      >
        <img :src="Image + 'bez.png'" alt="drewno" />
        <p>Bez</p>
      </div>
    </div>
    <!-- TYP BRAMY -->
    <div class="gate-info flex sb">
      <div>
        <h4>Kierunek przetłoczeń:</h4>
        <div class="flex sb spacer">
          <!-- Przetłoczenia -->
          <div
            class="blacha"
            :class="{ activebg: przetloczenieBramy === 'pion' }"
            @click="setPrzetloczenieBramy('pion')"
          >
            <img :src="Image + 'pion.png'" alt="blacha" />
            <p class="blacha-title">Pionowe</p>
          </div>
          <!-- Przetłoczenia -->
          <!-- Przetłoczenia -->
          <div
            class="blacha"
            :class="{ activebg: przetloczenieBramy === 'poziom' }"
            @click="setPrzetloczenieBramy('poziom')"
          >
            <img :src="Image + 'poziom.png'" alt="blacha" />
            <p class="blacha-title">Poziome</p>
          </div>
          <!-- Przetłoczenia -->
        </div>
      </div>
      <div v-show="typeGate != 'Bez'" class="gate-infos">
        <label for="gateHigh">Wysokość bramy</label>
        <select
          class="gate_input"
          id="gateHigh"
          name="gateHigh"
          type="text"
          required
          v-model="gateHigh"
        >
          <option>190cm (standard)</option>
          <option>200cm</option>
          <option>210cm</option>
          <option>220cm</option>
          <option>230cm</option>
          <option>240cm</option>
          <option>250cm</option>
        </select>
        <label for="gateSet">Pozycja bramy</label>
        <select
          class="gate_input"
          name="gateSet"
          id="gateSet"
          type="text"
          placeholder="Pozycja bramy"
          required
          v-model="gateSet"
        >
          <option>Lewa</option>
          <option>Środek</option>
          <option>Prawa</option>
        </select>
        <label for="gateWidth">Szerokość przetłoczeń</label>
        <select
          class="gate_input"
          id="gateWidth"
          name="gateWidth"
          type="text"
          placeholder="Szerokość przetłoczeń"
          required
          v-model="gateWidth"
        >
          <option>Wąskie</option>
          <option>Szerokie</option>
        </select>
      </div>
    </div>
    <div class="flex sb spacer">
      <div
        class="drewno"
        :class="{ activebg: colorGate === 'zlotydab' }"
        @click="setColorGate('zlotydab')"
      >
        <img :src="Image + 'zlotydab.png'" alt="drewno" />
        <p>Złoty Dąb</p>
      </div>
      <div
        class="drewno"
        :class="{ activebg: colorGate === 'orzech' }"
        @click="setColorGate('orzech')"
      >
        <img :src="Image + 'orzech.png'" alt="drewno" />
        <p>Orzech</p>
      </div>
    </div>
    <div class="flex sb spacer">
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorGate === 'biala' }"
        @click="setColorGate('biala')"
      >
        <img :src="Image + 'biala.png'" alt="blacha" />
        <p class="blacha-title">Biały</p>
        <p class="blacha-sm">RAL 9010</p>
      </div>
      <!-- KOLOR -->
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorGate === 'szarobialy' }"
        @click="setColorGate('szarobialy')"
      >
        <img :src="Image + 'szarobialy.png'" alt="blacha" />
        <p class="blacha-title">Szaro-biały</p>
        <p class="blacha-sm">RAL 9002</p>
      </div>
      <!-- KOLOR -->
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorGate === 'braz' }"
        @click="setColorGate('braz')"
      >
        <img :src="Image + 'braz.png'" alt="blacha" />
        <p class="blacha-title">Brąz</p>
        <p class="blacha-sm">RAL 8017</p>
      </div>
      <!-- KOLOR -->
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorGate === 'grafit' }"
        @click="setColorGate('grafit')"
      >
        <img :src="Image + 'grafit.png'" alt="blacha" />
        <p class="blacha-title">Grafit</p>
        <p class="blacha-sm">RAL 7016</p>
      </div>
      <!-- KOLOR -->
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorGate === 'srebrny' }"
        @click="setColorGate('srebrny')"
      >
        <img :src="Image + 'srebrny.png'" alt="blacha" />
        <p class="blacha-title">Srebrny</p>
        <p class="blacha-sm">RAL 9006</p>
      </div>
      <!-- KOLOR -->
    </div>
    <div class="flex sb spacer">
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorGate === 'ciemnygrafit' }"
        @click="setColorGate('ciemnygrafit')"
      >
        <img :src="Image + 'ciemnygrafit.png'" alt="blacha" />
        <p class="blacha-title">Ciemny Grafit</p>
        <p class="blacha-sm">RAL 7024</p>
      </div>
      <!-- KOLOR -->
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorGate === 'zielony' }"
        @click="setColorGate('zielony')"
      >
        <img :src="Image + 'zielony.png'" alt="blacha" />
        <p class="blacha-title">Zielony</p>
        <p class="blacha-sm">RAL 6020</p>
      </div>
      <!-- KOLOR -->
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorGate === 'wisnia' }"
        @click="setColorGate('wisnia')"
      >
        <img :src="Image + 'wisnia.png'" alt="blacha" />
        <p class="blacha-title">Wiśnia</p>
        <p class="blacha-sm">RAL 3011</p>
      </div>
      <!-- KOLOR -->
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorGate === 'piasek' }"
        @click="setColorGate('piasek')"
      >
        <img :src="Image + 'piasek.png'" alt="blacha" />
        <p class="blacha-title">Piasek</p>
        <p class="blacha-sm">RAL 1002</p>
      </div>
      <!-- KOLOR -->
      <!-- KOLOR -->
      <div
        class="blacha"
        :class="{ activebg: colorGate === 'ocynk' }"
        @click="setColorGate('ocynk')"
      >
        <img :src="Image + 'ocynk.png'" alt="blacha" />
        <p class="blacha-title">Ocynk</p>
      </div>
      <!-- KOLOR -->
    </div>
  </section>
  <section id="fifth" v-show="currentPage === 5">
    <div class="flex sb">
      <!-- LEFT COLUMN -->
      <div class="first-col">
        <!-- WIATA -->
        <div class="flex sb adds">
          <p>Dodaj wiatę</p>
          <div class="flex confirm-box">
            <div
              class="confirm"
              :class="{ activeconfirm: sheed === 'tak' }"
              @click="() => (sheed = 'tak')"
            >
              tak
            </div>
            <div
              class="confirm"
              :class="{ activeconfirm: sheed === 'nie' }"
              @click="() => (sheed = 'nie')"
            >
              nie
            </div>
          </div>
        </div>
        <!-- WIATA -->
        <div class="flex sb adds">
          <p class="text-confirm">Drzwi wejsciowe</p>
          <div class="flex confirm-box">
            <div
              class="confirm"
              :class="{ activeconfirm: door === 'tak' }"
              @click="() => (door = 'tak')"
            >
              tak
            </div>
            <div
              class="confirm"
              :class="{ activeconfirm: door === 'nie' }"
              @click="() => (door = 'nie')"
            >
              nie
            </div>
          </div>
        </div>
        <div class="flex sb adds">
          <p class="text-confirm">Okno uchylne</p>
          <div class="flex confirm-box">
            <div
              class="confirm"
              :class="{ activeconfirm: tiltWindow === 'tak' }"
              @click="() => (tiltWindow = 'tak')"
            >
              tak
            </div>
            <div
              class="confirm"
              :class="{ activeconfirm: tiltWindow === 'nie' }"
              @click="() => (tiltWindow = 'nie')"
            >
              nie
            </div>
          </div>
        </div>
        <div class="flex sb adds">
          <p class="text-confirm">Okno stałe</p>
          <div class="flex confirm-box">
            <div
              class="confirm"
              :class="{ activeconfirm: constWindow === 'tak' }"
              @click="() => (constWindow = 'tak')"
            >
              tak
            </div>
            <div
              class="confirm"
              :class="{ activeconfirm: constWindow === 'nie' }"
              @click="() => (constWindow = 'nie')"
            >
              nie
            </div>
          </div>
        </div>
        <div class="flex sb adds">
          <p class="text-confirm">Orynnowanie</p>
          <div class="flex confirm-box">
            <div
              class="confirm"
              :class="{ activeconfirm: gutter === 'tak' }"
              @click="() => (gutter = 'tak')"
            >
              tak
            </div>
            <div
              class="confirm"
              :class="{ activeconfirm: gutter === 'nie' }"
              @click="() => (gutter = 'nie')"
            >
              nie
            </div>
          </div>
        </div>
      </div>
      <!-- LEFT COLUMN -->
      <!-- RIGHT COLUMN -->
      <div class="second-coll">
        <div class="flex sb adds">
          <p class="text-confirm">Kotwiczenie garażu do podłoża</p>
          <div class="flex confirm-box">
            <div
              class="confirm"
              :class="{ activeconfirm: anchor === 'tak' }"
              @click="() => (anchor = 'tak')"
            >
              tak
            </div>
            <div
              class="confirm"
              :class="{ activeconfirm: anchor === 'nie' }"
              @click="() => (anchor = 'nie')"
            >
              nie
            </div>
          </div>
        </div>
        <div class="flex sb adds">
          <p class="text-confirm">Filc antykondensacyjny pod dach</p>
          <div class="flex confirm-box">
            <div
              class="confirm"
              :class="{ activeconfirm: filc === 'tak' }"
              @click="() => (filc = 'tak')"
            >
              tak
            </div>
            <div
              class="confirm"
              :class="{ activeconfirm: filc === 'nie' }"
              @click="() => (filc = 'nie')"
            >
              nie
            </div>
          </div>
        </div>
        <div class="flex sb adds">
          <p class="text-confirm">Napęd elektryczny</p>
          <div class="flex confirm-box">
            <div
              class="confirm"
              :class="{ activeconfirm: drive === 'tak' }"
              @click="() => (drive = 'tak')"
            >
              tak
            </div>
            <div
              class="confirm"
              :class="{ activeconfirm: drive === 'nie' }"
              @click="() => (drive = 'nie')"
            >
              nie
            </div>
          </div>
        </div>
      </div>
      <!-- RIGHT COLUMN -->
    </div>
  </section>
  <section id="sixth" v-show="currentPage === 6">
    <div class="flex sb">
      <div class="flex-col config-contact">
        <img :src="Image + 'contact.png'" alt="contact" />
        <input
          type="text"
          id="name"
          placeholder="Imię i nazwisko"
          v-model="name"
        />
        <input type="email" id="email" placeholder="Email" v-model="email" />
        <input type="tel" id="tel" placeholder="Nr telefonu" v-model="tel" />
      </div>
      <div class="flex-col conf-contact">
        <img :src="Image + 'map.png'" alt="contact" />
        <input
          type="text"
          id="placement"
          placeholder="miejscowość/województwo"
          v-model="placement"
        />
        <textarea
          type="email"
          id="textarea"
          rows="3"
          cols="33"
          placeholder="dodatkowe informacje"
          v-model="textarea"
        ></textarea>
      </div>
    </div>
  </section>

  <button @click="prevPage()" v-show="currentPage != 1" class="next-btn">
    Cofnij
  </button>
  <button @click="nextPage()" v-show="currentPage != 6" class="next-btn">
    Dalej
  </button>
  <button @click="sendMail()" v-show="currentPage === 6" class="next-btn">
    Wyślij
  </button>
</template>

<script setup>
import { useToast } from "vue-toastification";
import emailjs from "@emailjs/browser";
import { ref } from "vue";

const toast = useToast();
const width = ref(null);
const length = ref(null);
const height = ref(null);
const typeRoof = ref(null);
const colorWall = ref("zlotydab");
const colorRoof = ref("zlotydab");
const przetloczenie = ref("poziom");
const przetloczenieBramy = ref("poziom");
const materialOfRoof = ref("trapezowa");
const typeGate = ref("Uchylna");
const colorGate = ref("zlotydab");
const gateHigh = ref(null);
const gateSet = ref(null);
const gateWidth = ref(null);
const sheed = ref(null);
const anchor = ref(null);
const door = ref(null);
const tiltWindow = ref(null);
const constWindow = ref(null);
const gutter = ref(null);
const filc = ref(null);
const drive = ref(null);
const placement = ref(null);
const name = ref(null);
const email = ref(null);
const tel = ref(null);
const textarea = ref(null);
const Image = import.meta.env.VITE_WP_PATH;
const currentPage = ref(1);
// POMOCNICZE
let wysokosci = [];
let rozmiary = [];
let sum = 1.5;
let sum2 = 203;
// ROZMIARY POMOCNICZE
for (let index = 2; index < 17; index++) {
  let temp = sum;
  sum = temp + 0.5;
  rozmiary = [...rozmiary, sum];
}
for (let index = 2; index < 21; index++) {
  let temp2 = sum2;
  sum2 = temp2 + 10;
  wysokosci = [...wysokosci, sum2];
} // ROZMIARY POMOCNICZE

const sendMail = () => {
  const templateParams = {
    width: width.value,
    length: length.value,
    height: height.value,
    typeRoof: typeRoof.value,
    colorWall: colorWall.value,
    colorRoof: colorRoof.value,
    przetloczenie: przetloczenie.value,
    materialOfRoof: materialOfRoof.value,
    typeGate: typeGate.value,
    colorGate: colorGate.value,
    gateHigh: gateHigh.value,
    gateSet: gateSet.value,
    gateWidth: gateWidth.value,
    sheed: sheed.value,
    anchor: anchor.value,
    door: door.value,
    tiltWindow: tiltWindow.value,
    constWindow: constWindow.value,
    gutter: gutter.value,
    filc: filc.value,
    drive: drive.value,
    placement: placement.value,
    name: name.value,
    email: email.value,
    tel: tel.value,
    textarea: textarea.value,
    przetloczenieBramy: przetloczenieBramy.value,
  };
  emailjs
    .send(
      "service_nfi5dzq",
      "template_692vjcc",
      templateParams,
      "8R7EpCYICZiaQkFpj"
    )
    .then(
      function (response) {
        if (name.value && email.value && tel.value) {
          toast.success("Wysłano dane");
          window.location.href = "https://newgarage.pl/";
        } else toast.error("Uzupełnij danymi");
      },
      function (error) {
        console.log("FAILED...", error);
      }
    );
};

const setTypeRoof = (type) => {
  typeRoof.value = type;
};
const setColorWall = (type) => {
  colorWall.value = type;
};
const setColorRoof = (type) => {
  colorRoof.value = type;
};
const setPrzetloczenie = (type) => {
  przetloczenie.value = type;
};
const setPrzetloczenieBramy = (type) => {
  przetloczenieBramy.value = type;
};
const setTypeGate = (type) => {
  typeGate.value = type;
};
const setColorGate = (type) => {
  colorGate.value = type;
};

const nextPage = () => {
  if (currentPage.value === 1) {
    if (typeRoof.value && height.value && width.value && length.value) {
      currentPage.value++;
    } else toast.error("Uzupełnij danymi");
  } else if (currentPage.value === 4) {
    if (
      (gateHigh.value && gateSet.value && gateWidth.value) ||
      typeGate.value === "Bez"
    ) {
      currentPage.value++;
    } else toast.error("Uzupełnij danymi");
  } else currentPage.value++;
  window.scrollTo({ top: 0 });
};

const prevPage = () => {
  if (currentPage.value > 0) {
    currentPage.value--;
  }
};
</script>

<style scoped>
.sb {
  justify-content: space-around;
}

#first {
  gap: 50px;
  padding-top: 10vh;
}
#rozmiary {
  padding-bottom: 50px;
}
#dach {
}
.rodzaj-dachu {
  border: 1px solid;
  border-radius: 8px;
  padding-bottom: 10px;
  margin-bottom: 20px;
}
.activebg {
  background: rgba(255, 0, 0, 0.5);
}
.next-btn {
  background-color: white;
  border: 2px solid darkgray !important;
  color: black;
  border: 0;
  border-radius: 8px;
  width: 150px;
  /* height: 50px; */
  font-weight: bold;
  font-size: 24px;
  margin: 25px;
  transition: all ease-in-out 0.3s;
}
.next-btn:hover {
  background-color: red;
}

h2 {
  font-size: 36px;
}
.blacha-title {
  font-size: 24px;
}
.blacha-sm {
  font-size: 16px;
}

p {
  margin-bottom: 10px;
}
.spacer {
  margin-bottom: 20px;
}
.drewno {
  padding: 15px;
  border-radius: 8px;
}
.blacha {
  padding: 15px;
  border-radius: 8px;
}
.gate-type {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 2rem;
  flex-wrap: wrap;
}

.gate {
  padding: 15px;
  border-radius: 8px;
}
.gate_input {
  width: 100%;
  margin-bottom: 20px; 
  max-width: 350px;
  font-size: 24px;
}
.gate-infos {
  display: flex;
  flex-direction: column;
}

#fifth {
  font-size: 24px;
  text-align: left;
}
.adds {
  display: flex;
  align-items: center;
  align-items: stretch;
  flex-wrap: wrap;
  flex-basis: 50%;
  padding-top: 50px;
  align-items: center;
  justify-content: space-between;
}

@media (max-width: 750px) {
  .adds {
    flex-basis: 100%;
  }
}
.confirm {
  padding: 5px 30px 5px 30px;
  border: 2px solid darkgray !important;
  border-radius: 8px;
  background-color: white;
  margin-left: 20px;
  color: black;
  transition: all 0.3s;
  cursor: pointer;
}
.confirm:hover {
  background-color: rgba(255, 0, 0, 0.5);
}
.activeconfirm {
  background-color: red;
  color: white;
}
/* .text-confirm {
  max-width: 200px;
} */

#sixth {
  padding-top: 10vh;
}

.config-contact {
  gap: 25px;
}

input {
  border: 2px solid darkgray !important;
  border-radius: 5px;
  text-align: center;
  font-size: 24px;
  height: 50px;
  width: 250px;
}
select {
  border: 2px solid darkgray !important;
  border-radius: 5px;
  text-align: center;
  font-size: 24px;
  height: 50px;
  width: 250px;
}

textarea {
  border: 2px solid darkgray !important;
  border-radius: 5px;
  text-align: center;
  font-size: 24px;
  max-width: 300px;
}

.flex {
  display: flex;
  align-items: center;
  align-items: stretch;
  flex-wrap: wrap;
}

.flex-col {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;
}

input {
  border: 2px solid darkgray !important;
  border-radius: 5px;
  text-align: center;
  font-size: 24px;
  height: 50px;
}

textarea {
  border: 2px solid darkgray !important;
  border-radius: 5px;
  text-align: center;
  font-size: 24px;
  max-width: 300px;
}
p {
  font-size: 24px;
}
</style>