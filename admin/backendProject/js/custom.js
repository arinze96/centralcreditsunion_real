function open_memeber(x) {
  let row = $(x).closest(".collection-item");
  let pageid = row.parent().attr("data-pageid");
  loadSelection(row, pageid, "new_form"+pageid,"modal");
}

function getReferrals(x) {
  let row = $(x).closest(".collection-item");
  let pageData = row.parent().data();
  $(x).parent().startLoader();
  $.post(`${site.process}custom`, {case:"getReferrals", ...row.data()}, function (response) {
    $(x).parent().stopLoader();
    let res = isJson(response);
    if(res.status){
      $("#newextform1_referrals"+pageData.pageid).find(".modal-content").html(res.data);
      $("#newextform1_referrals"+pageData.pageid).openModal()
    }
  })
  // loadSelection(row, pageid, "newextform1_referrals"+pageid,"modal");
}

function attach_name(ths) {
  let pageData = $(ths).data();
  let val = $(ths).val();
  let index = $(ths).find(`option[value=${val}]`).text();
  $(`#name${pageData.pageid}`).val(index).attr({value:index})
}
