// import

import { loadDefaultJapaneseParser } from 'budoux';
/**
 * DOMContentLoaded
 */
 document.addEventListener('DOMContentLoaded', function () {
	//日本語の改行自動化
	const parser = loadDefaultJapaneseParser();
	const wordBreakElems = document.querySelectorAll('.u-wbr');
	wordBreakElems.forEach((ele) => {
		parser.applyElement(ele);
	});
});