<?php

/* ORMENTITYANNOTATION:App\Product\Infrastructure\Persistence\Table\ElementCatalogTable */
namespace App\Product\Infrastructure\Persistence\Table {
	/**
	 * ElementCatalogEntity
	 * @see \App\Product\Infrastructure\Persistence\Table\ElementCatalogTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getId()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setId(\int|\Bitrix\Main\DB\SqlExpression $id)
	 * @method bool hasId()
	 * @method bool isIdFilled()
	 * @method bool isIdChanged()
	 * @method \Bitrix\Main\Type\DateTime getTimestampX()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setTimestampX(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $timestampX)
	 * @method bool hasTimestampX()
	 * @method bool isTimestampXFilled()
	 * @method bool isTimestampXChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualTimestampX()
	 * @method \Bitrix\Main\Type\DateTime requireTimestampX()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetTimestampX()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetTimestampX()
	 * @method \Bitrix\Main\Type\DateTime fillTimestampX()
	 * @method \int getModifiedBy()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setModifiedBy(\int|\Bitrix\Main\DB\SqlExpression $modifiedBy)
	 * @method bool hasModifiedBy()
	 * @method bool isModifiedByFilled()
	 * @method bool isModifiedByChanged()
	 * @method \int remindActualModifiedBy()
	 * @method \int requireModifiedBy()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetModifiedBy()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetModifiedBy()
	 * @method \int fillModifiedBy()
	 * @method \Bitrix\Main\Type\DateTime getDateCreate()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setDateCreate(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $dateCreate)
	 * @method bool hasDateCreate()
	 * @method bool isDateCreateFilled()
	 * @method bool isDateCreateChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualDateCreate()
	 * @method \Bitrix\Main\Type\DateTime requireDateCreate()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetDateCreate()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetDateCreate()
	 * @method \Bitrix\Main\Type\DateTime fillDateCreate()
	 * @method \int getCreatedBy()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setCreatedBy(\int|\Bitrix\Main\DB\SqlExpression $createdBy)
	 * @method bool hasCreatedBy()
	 * @method bool isCreatedByFilled()
	 * @method bool isCreatedByChanged()
	 * @method \int remindActualCreatedBy()
	 * @method \int requireCreatedBy()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetCreatedBy()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetCreatedBy()
	 * @method \int fillCreatedBy()
	 * @method \int getIblockId()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setIblockId(\int|\Bitrix\Main\DB\SqlExpression $iblockId)
	 * @method bool hasIblockId()
	 * @method bool isIblockIdFilled()
	 * @method bool isIblockIdChanged()
	 * @method \int remindActualIblockId()
	 * @method \int requireIblockId()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetIblockId()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetIblockId()
	 * @method \int fillIblockId()
	 * @method \int getIblockSectionId()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setIblockSectionId(\int|\Bitrix\Main\DB\SqlExpression $iblockSectionId)
	 * @method bool hasIblockSectionId()
	 * @method bool isIblockSectionIdFilled()
	 * @method bool isIblockSectionIdChanged()
	 * @method \int remindActualIblockSectionId()
	 * @method \int requireIblockSectionId()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetIblockSectionId()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetIblockSectionId()
	 * @method \int fillIblockSectionId()
	 * @method \boolean getActive()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setActive(\boolean|\Bitrix\Main\DB\SqlExpression $active)
	 * @method bool hasActive()
	 * @method bool isActiveFilled()
	 * @method bool isActiveChanged()
	 * @method \boolean remindActualActive()
	 * @method \boolean requireActive()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetActive()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetActive()
	 * @method \boolean fillActive()
	 * @method \Bitrix\Main\Type\DateTime getActiveFrom()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setActiveFrom(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $activeFrom)
	 * @method bool hasActiveFrom()
	 * @method bool isActiveFromFilled()
	 * @method bool isActiveFromChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualActiveFrom()
	 * @method \Bitrix\Main\Type\DateTime requireActiveFrom()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetActiveFrom()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetActiveFrom()
	 * @method \Bitrix\Main\Type\DateTime fillActiveFrom()
	 * @method \Bitrix\Main\Type\DateTime getActiveTo()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setActiveTo(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $activeTo)
	 * @method bool hasActiveTo()
	 * @method bool isActiveToFilled()
	 * @method bool isActiveToChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualActiveTo()
	 * @method \Bitrix\Main\Type\DateTime requireActiveTo()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetActiveTo()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetActiveTo()
	 * @method \Bitrix\Main\Type\DateTime fillActiveTo()
	 * @method \int getSort()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setSort(\int|\Bitrix\Main\DB\SqlExpression $sort)
	 * @method bool hasSort()
	 * @method bool isSortFilled()
	 * @method bool isSortChanged()
	 * @method \int remindActualSort()
	 * @method \int requireSort()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetSort()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetSort()
	 * @method \int fillSort()
	 * @method \string getName()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setName(\string|\Bitrix\Main\DB\SqlExpression $name)
	 * @method bool hasName()
	 * @method bool isNameFilled()
	 * @method bool isNameChanged()
	 * @method \string remindActualName()
	 * @method \string requireName()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetName()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetName()
	 * @method \string fillName()
	 * @method \int getPreviewPicture()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setPreviewPicture(\int|\Bitrix\Main\DB\SqlExpression $previewPicture)
	 * @method bool hasPreviewPicture()
	 * @method bool isPreviewPictureFilled()
	 * @method bool isPreviewPictureChanged()
	 * @method \int remindActualPreviewPicture()
	 * @method \int requirePreviewPicture()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetPreviewPicture()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetPreviewPicture()
	 * @method \int fillPreviewPicture()
	 * @method \string getPreviewText()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setPreviewText(\string|\Bitrix\Main\DB\SqlExpression $previewText)
	 * @method bool hasPreviewText()
	 * @method bool isPreviewTextFilled()
	 * @method bool isPreviewTextChanged()
	 * @method \string remindActualPreviewText()
	 * @method \string requirePreviewText()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetPreviewText()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetPreviewText()
	 * @method \string fillPreviewText()
	 * @method \string getPreviewTextType()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setPreviewTextType(\string|\Bitrix\Main\DB\SqlExpression $previewTextType)
	 * @method bool hasPreviewTextType()
	 * @method bool isPreviewTextTypeFilled()
	 * @method bool isPreviewTextTypeChanged()
	 * @method \string remindActualPreviewTextType()
	 * @method \string requirePreviewTextType()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetPreviewTextType()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetPreviewTextType()
	 * @method \string fillPreviewTextType()
	 * @method \int getDetailPicture()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setDetailPicture(\int|\Bitrix\Main\DB\SqlExpression $detailPicture)
	 * @method bool hasDetailPicture()
	 * @method bool isDetailPictureFilled()
	 * @method bool isDetailPictureChanged()
	 * @method \int remindActualDetailPicture()
	 * @method \int requireDetailPicture()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetDetailPicture()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetDetailPicture()
	 * @method \int fillDetailPicture()
	 * @method \string getDetailText()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setDetailText(\string|\Bitrix\Main\DB\SqlExpression $detailText)
	 * @method bool hasDetailText()
	 * @method bool isDetailTextFilled()
	 * @method bool isDetailTextChanged()
	 * @method \string remindActualDetailText()
	 * @method \string requireDetailText()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetDetailText()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetDetailText()
	 * @method \string fillDetailText()
	 * @method \string getDetailTextType()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setDetailTextType(\string|\Bitrix\Main\DB\SqlExpression $detailTextType)
	 * @method bool hasDetailTextType()
	 * @method bool isDetailTextTypeFilled()
	 * @method bool isDetailTextTypeChanged()
	 * @method \string remindActualDetailTextType()
	 * @method \string requireDetailTextType()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetDetailTextType()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetDetailTextType()
	 * @method \string fillDetailTextType()
	 * @method \string getSearchableContent()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setSearchableContent(\string|\Bitrix\Main\DB\SqlExpression $searchableContent)
	 * @method bool hasSearchableContent()
	 * @method bool isSearchableContentFilled()
	 * @method bool isSearchableContentChanged()
	 * @method \string remindActualSearchableContent()
	 * @method \string requireSearchableContent()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetSearchableContent()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetSearchableContent()
	 * @method \string fillSearchableContent()
	 * @method \int getWfStatusId()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setWfStatusId(\int|\Bitrix\Main\DB\SqlExpression $wfStatusId)
	 * @method bool hasWfStatusId()
	 * @method bool isWfStatusIdFilled()
	 * @method bool isWfStatusIdChanged()
	 * @method \int remindActualWfStatusId()
	 * @method \int requireWfStatusId()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetWfStatusId()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetWfStatusId()
	 * @method \int fillWfStatusId()
	 * @method \int getWfParentElementId()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setWfParentElementId(\int|\Bitrix\Main\DB\SqlExpression $wfParentElementId)
	 * @method bool hasWfParentElementId()
	 * @method bool isWfParentElementIdFilled()
	 * @method bool isWfParentElementIdChanged()
	 * @method \int remindActualWfParentElementId()
	 * @method \int requireWfParentElementId()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetWfParentElementId()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetWfParentElementId()
	 * @method \int fillWfParentElementId()
	 * @method \string getWfNew()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setWfNew(\string|\Bitrix\Main\DB\SqlExpression $wfNew)
	 * @method bool hasWfNew()
	 * @method bool isWfNewFilled()
	 * @method bool isWfNewChanged()
	 * @method \string remindActualWfNew()
	 * @method \string requireWfNew()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetWfNew()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetWfNew()
	 * @method \string fillWfNew()
	 * @method \int getWfLockedBy()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setWfLockedBy(\int|\Bitrix\Main\DB\SqlExpression $wfLockedBy)
	 * @method bool hasWfLockedBy()
	 * @method bool isWfLockedByFilled()
	 * @method bool isWfLockedByChanged()
	 * @method \int remindActualWfLockedBy()
	 * @method \int requireWfLockedBy()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetWfLockedBy()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetWfLockedBy()
	 * @method \int fillWfLockedBy()
	 * @method \Bitrix\Main\Type\DateTime getWfDateLock()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setWfDateLock(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $wfDateLock)
	 * @method bool hasWfDateLock()
	 * @method bool isWfDateLockFilled()
	 * @method bool isWfDateLockChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualWfDateLock()
	 * @method \Bitrix\Main\Type\DateTime requireWfDateLock()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetWfDateLock()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetWfDateLock()
	 * @method \Bitrix\Main\Type\DateTime fillWfDateLock()
	 * @method \string getWfComments()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setWfComments(\string|\Bitrix\Main\DB\SqlExpression $wfComments)
	 * @method bool hasWfComments()
	 * @method bool isWfCommentsFilled()
	 * @method bool isWfCommentsChanged()
	 * @method \string remindActualWfComments()
	 * @method \string requireWfComments()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetWfComments()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetWfComments()
	 * @method \string fillWfComments()
	 * @method \boolean getInSections()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setInSections(\boolean|\Bitrix\Main\DB\SqlExpression $inSections)
	 * @method bool hasInSections()
	 * @method bool isInSectionsFilled()
	 * @method bool isInSectionsChanged()
	 * @method \boolean remindActualInSections()
	 * @method \boolean requireInSections()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetInSections()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetInSections()
	 * @method \boolean fillInSections()
	 * @method \string getXmlId()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setXmlId(\string|\Bitrix\Main\DB\SqlExpression $xmlId)
	 * @method bool hasXmlId()
	 * @method bool isXmlIdFilled()
	 * @method bool isXmlIdChanged()
	 * @method \string remindActualXmlId()
	 * @method \string requireXmlId()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetXmlId()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetXmlId()
	 * @method \string fillXmlId()
	 * @method \string getCode()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setCode(\string|\Bitrix\Main\DB\SqlExpression $code)
	 * @method bool hasCode()
	 * @method bool isCodeFilled()
	 * @method bool isCodeChanged()
	 * @method \string remindActualCode()
	 * @method \string requireCode()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetCode()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetCode()
	 * @method \string fillCode()
	 * @method \string getTags()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setTags(\string|\Bitrix\Main\DB\SqlExpression $tags)
	 * @method bool hasTags()
	 * @method bool isTagsFilled()
	 * @method bool isTagsChanged()
	 * @method \string remindActualTags()
	 * @method \string requireTags()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetTags()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetTags()
	 * @method \string fillTags()
	 * @method \string getTmpId()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setTmpId(\string|\Bitrix\Main\DB\SqlExpression $tmpId)
	 * @method bool hasTmpId()
	 * @method bool isTmpIdFilled()
	 * @method bool isTmpIdChanged()
	 * @method \string remindActualTmpId()
	 * @method \string requireTmpId()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetTmpId()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetTmpId()
	 * @method \string fillTmpId()
	 * @method \int getShowCounter()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setShowCounter(\int|\Bitrix\Main\DB\SqlExpression $showCounter)
	 * @method bool hasShowCounter()
	 * @method bool isShowCounterFilled()
	 * @method bool isShowCounterChanged()
	 * @method \int remindActualShowCounter()
	 * @method \int requireShowCounter()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetShowCounter()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetShowCounter()
	 * @method \int fillShowCounter()
	 * @method \Bitrix\Main\Type\DateTime getShowCounterStart()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setShowCounterStart(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $showCounterStart)
	 * @method bool hasShowCounterStart()
	 * @method bool isShowCounterStartFilled()
	 * @method bool isShowCounterStartChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualShowCounterStart()
	 * @method \Bitrix\Main\Type\DateTime requireShowCounterStart()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetShowCounterStart()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetShowCounterStart()
	 * @method \Bitrix\Main\Type\DateTime fillShowCounterStart()
	 * @method \Bitrix\Iblock\Iblock getIblock()
	 * @method \Bitrix\Iblock\Iblock remindActualIblock()
	 * @method \Bitrix\Iblock\Iblock requireIblock()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setIblock(\Bitrix\Iblock\Iblock $object)
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetIblock()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetIblock()
	 * @method bool hasIblock()
	 * @method bool isIblockFilled()
	 * @method bool isIblockChanged()
	 * @method \Bitrix\Iblock\Iblock fillIblock()
	 * @method \Bitrix\Iblock\EO_Element getWfParentElement()
	 * @method \Bitrix\Iblock\EO_Element remindActualWfParentElement()
	 * @method \Bitrix\Iblock\EO_Element requireWfParentElement()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setWfParentElement(\Bitrix\Iblock\EO_Element $object)
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetWfParentElement()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetWfParentElement()
	 * @method bool hasWfParentElement()
	 * @method bool isWfParentElementFilled()
	 * @method bool isWfParentElementChanged()
	 * @method \Bitrix\Iblock\EO_Element fillWfParentElement()
	 * @method \Bitrix\Iblock\EO_Section getIblockSection()
	 * @method \Bitrix\Iblock\EO_Section remindActualIblockSection()
	 * @method \Bitrix\Iblock\EO_Section requireIblockSection()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setIblockSection(\Bitrix\Iblock\EO_Section $object)
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetIblockSection()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetIblockSection()
	 * @method bool hasIblockSection()
	 * @method bool isIblockSectionFilled()
	 * @method bool isIblockSectionChanged()
	 * @method \Bitrix\Iblock\EO_Section fillIblockSection()
	 * @method \Bitrix\Main\EO_User getModifiedByUser()
	 * @method \Bitrix\Main\EO_User remindActualModifiedByUser()
	 * @method \Bitrix\Main\EO_User requireModifiedByUser()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setModifiedByUser(\Bitrix\Main\EO_User $object)
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetModifiedByUser()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetModifiedByUser()
	 * @method bool hasModifiedByUser()
	 * @method bool isModifiedByUserFilled()
	 * @method bool isModifiedByUserChanged()
	 * @method \Bitrix\Main\EO_User fillModifiedByUser()
	 * @method \Bitrix\Main\EO_User getCreatedByUser()
	 * @method \Bitrix\Main\EO_User remindActualCreatedByUser()
	 * @method \Bitrix\Main\EO_User requireCreatedByUser()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setCreatedByUser(\Bitrix\Main\EO_User $object)
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetCreatedByUser()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetCreatedByUser()
	 * @method bool hasCreatedByUser()
	 * @method bool isCreatedByUserFilled()
	 * @method bool isCreatedByUserChanged()
	 * @method \Bitrix\Main\EO_User fillCreatedByUser()
	 * @method \Bitrix\Main\EO_User getWfLockedByUser()
	 * @method \Bitrix\Main\EO_User remindActualWfLockedByUser()
	 * @method \Bitrix\Main\EO_User requireWfLockedByUser()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity setWfLockedByUser(\Bitrix\Main\EO_User $object)
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity resetWfLockedByUser()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unsetWfLockedByUser()
	 * @method bool hasWfLockedByUser()
	 * @method bool isWfLockedByUserFilled()
	 * @method bool isWfLockedByUserChanged()
	 * @method \Bitrix\Main\EO_User fillWfLockedByUser()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity set($fieldName, $value)
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity reset($fieldName)
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method mixed fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity wakeUp($data)
	 */
	class EO_ElementCatalog extends \Bitrix\Main\ORM\Objectify\EntityObject {
		/* @var \App\Product\Infrastructure\Persistence\Table\ElementCatalogTable */
		static public $dataClass = '\App\Product\Infrastructure\Persistence\Table\ElementCatalogTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace App\Product\Infrastructure\Persistence\Table {
	/**
	 * ElementCatalogEntityCollection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getIdList()
	 * @method \Bitrix\Main\Type\DateTime[] getTimestampXList()
	 * @method \Bitrix\Main\Type\DateTime[] fillTimestampX()
	 * @method \int[] getModifiedByList()
	 * @method \int[] fillModifiedBy()
	 * @method \Bitrix\Main\Type\DateTime[] getDateCreateList()
	 * @method \Bitrix\Main\Type\DateTime[] fillDateCreate()
	 * @method \int[] getCreatedByList()
	 * @method \int[] fillCreatedBy()
	 * @method \int[] getIblockIdList()
	 * @method \int[] fillIblockId()
	 * @method \int[] getIblockSectionIdList()
	 * @method \int[] fillIblockSectionId()
	 * @method \boolean[] getActiveList()
	 * @method \boolean[] fillActive()
	 * @method \Bitrix\Main\Type\DateTime[] getActiveFromList()
	 * @method \Bitrix\Main\Type\DateTime[] fillActiveFrom()
	 * @method \Bitrix\Main\Type\DateTime[] getActiveToList()
	 * @method \Bitrix\Main\Type\DateTime[] fillActiveTo()
	 * @method \int[] getSortList()
	 * @method \int[] fillSort()
	 * @method \string[] getNameList()
	 * @method \string[] fillName()
	 * @method \int[] getPreviewPictureList()
	 * @method \int[] fillPreviewPicture()
	 * @method \string[] getPreviewTextList()
	 * @method \string[] fillPreviewText()
	 * @method \string[] getPreviewTextTypeList()
	 * @method \string[] fillPreviewTextType()
	 * @method \int[] getDetailPictureList()
	 * @method \int[] fillDetailPicture()
	 * @method \string[] getDetailTextList()
	 * @method \string[] fillDetailText()
	 * @method \string[] getDetailTextTypeList()
	 * @method \string[] fillDetailTextType()
	 * @method \string[] getSearchableContentList()
	 * @method \string[] fillSearchableContent()
	 * @method \int[] getWfStatusIdList()
	 * @method \int[] fillWfStatusId()
	 * @method \int[] getWfParentElementIdList()
	 * @method \int[] fillWfParentElementId()
	 * @method \string[] getWfNewList()
	 * @method \string[] fillWfNew()
	 * @method \int[] getWfLockedByList()
	 * @method \int[] fillWfLockedBy()
	 * @method \Bitrix\Main\Type\DateTime[] getWfDateLockList()
	 * @method \Bitrix\Main\Type\DateTime[] fillWfDateLock()
	 * @method \string[] getWfCommentsList()
	 * @method \string[] fillWfComments()
	 * @method \boolean[] getInSectionsList()
	 * @method \boolean[] fillInSections()
	 * @method \string[] getXmlIdList()
	 * @method \string[] fillXmlId()
	 * @method \string[] getCodeList()
	 * @method \string[] fillCode()
	 * @method \string[] getTagsList()
	 * @method \string[] fillTags()
	 * @method \string[] getTmpIdList()
	 * @method \string[] fillTmpId()
	 * @method \int[] getShowCounterList()
	 * @method \int[] fillShowCounter()
	 * @method \Bitrix\Main\Type\DateTime[] getShowCounterStartList()
	 * @method \Bitrix\Main\Type\DateTime[] fillShowCounterStart()
	 * @method \Bitrix\Iblock\Iblock[] getIblockList()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntityCollection getIblockCollection()
	 * @method \Bitrix\Iblock\EO_Iblock_Collection fillIblock()
	 * @method \Bitrix\Iblock\EO_Element[] getWfParentElementList()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntityCollection getWfParentElementCollection()
	 * @method \Bitrix\Iblock\EO_Element_Collection fillWfParentElement()
	 * @method \Bitrix\Iblock\EO_Section[] getIblockSectionList()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntityCollection getIblockSectionCollection()
	 * @method \Bitrix\Iblock\EO_Section_Collection fillIblockSection()
	 * @method \Bitrix\Main\EO_User[] getModifiedByUserList()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntityCollection getModifiedByUserCollection()
	 * @method \Bitrix\Main\EO_User_Collection fillModifiedByUser()
	 * @method \Bitrix\Main\EO_User[] getCreatedByUserList()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntityCollection getCreatedByUserCollection()
	 * @method \Bitrix\Main\EO_User_Collection fillCreatedByUser()
	 * @method \Bitrix\Main\EO_User[] getWfLockedByUserList()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntityCollection getWfLockedByUserCollection()
	 * @method \Bitrix\Main\EO_User_Collection fillWfLockedByUser()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity $object)
	 * @method bool has(\App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity $object)
	 * @method bool hasByPrimary($primary)
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity getByPrimary($primary)
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity[] getAll()
	 * @method bool remove(\App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity $object)
	 * @method void removeByPrimary($primary)
	 * @method array|\Bitrix\Main\ORM\Objectify\Collection|null fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntityCollection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntityCollection merge(?\App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntityCollection $collection)
	 * @method bool isEmpty()
	 * @method array collectValues(int $valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, int $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL, bool $recursive = false)
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity|null find(callable $callback)
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntityCollection filter(callable $callback)
	 */
	class EO_ElementCatalog_Collection extends \Bitrix\Main\ORM\Objectify\Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \App\Product\Infrastructure\Persistence\Table\ElementCatalogTable */
		static public $dataClass = '\App\Product\Infrastructure\Persistence\Table\ElementCatalogTable';
	}
}
namespace App\Product\Infrastructure\Persistence\Table {
	/**
	 * @method static \Bitrix\Iblock\ORM\Query query()
	 * @method static EO_ElementCatalog_Result getByPrimary($primary, array $parameters = [])
	 * @method static EO_ElementCatalog_Result getById($id)
	 * @method static EO_ElementCatalog_Result getList(array $parameters = [])
	 * @method static EO_ElementCatalog_Entity getEntity()
	 * @method static \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity createObject($setDefaultValues = true)
	 * @method static \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntityCollection createCollection()
	 * @method static \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity wakeUpObject($row)
	 * @method static \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntityCollection wakeUpCollection($rows)
	 */
	class ElementCatalogTable extends \Bitrix\Main\ORM\Data\DataManager {}
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_ElementCatalog_Result exec()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity fetchObject()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntityCollection fetchCollection()
	 */
	class EO_ElementCatalog_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity fetchObject()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntityCollection fetchCollection()
	 */
	class EO_ElementCatalog_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity createObject($setDefaultValues = true)
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntityCollection createCollection()
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntity wakeUpObject($row)
	 * @method \App\Product\Infrastructure\Persistence\Entity\ElementCatalogEntityCollection wakeUpCollection($rows)
	 */
	class EO_ElementCatalog_Entity extends \Bitrix\Main\ORM\Entity {}
}
/* ORMENTITYANNOTATION:Bitrix\Iblock\IblockTable */
namespace Bitrix\Iblock {
	/**
	 * Iblock
	 * @see \Bitrix\Iblock\IblockTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getId()
	 * @method \Bitrix\Iblock\Iblock setId(\int|\Bitrix\Main\DB\SqlExpression $id)
	 * @method bool hasId()
	 * @method bool isIdFilled()
	 * @method bool isIdChanged()
	 * @method \Bitrix\Main\Type\DateTime getTimestampX()
	 * @method \Bitrix\Iblock\Iblock setTimestampX(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $timestampX)
	 * @method bool hasTimestampX()
	 * @method bool isTimestampXFilled()
	 * @method bool isTimestampXChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualTimestampX()
	 * @method \Bitrix\Main\Type\DateTime requireTimestampX()
	 * @method \Bitrix\Iblock\Iblock resetTimestampX()
	 * @method \Bitrix\Iblock\Iblock unsetTimestampX()
	 * @method \Bitrix\Main\Type\DateTime fillTimestampX()
	 * @method \string getIblockTypeId()
	 * @method \Bitrix\Iblock\Iblock setIblockTypeId(\string|\Bitrix\Main\DB\SqlExpression $iblockTypeId)
	 * @method bool hasIblockTypeId()
	 * @method bool isIblockTypeIdFilled()
	 * @method bool isIblockTypeIdChanged()
	 * @method \string remindActualIblockTypeId()
	 * @method \string requireIblockTypeId()
	 * @method \Bitrix\Iblock\Iblock resetIblockTypeId()
	 * @method \Bitrix\Iblock\Iblock unsetIblockTypeId()
	 * @method \string fillIblockTypeId()
	 * @method \string getLid()
	 * @method \Bitrix\Iblock\Iblock setLid(\string|\Bitrix\Main\DB\SqlExpression $lid)
	 * @method bool hasLid()
	 * @method bool isLidFilled()
	 * @method bool isLidChanged()
	 * @method \string remindActualLid()
	 * @method \string requireLid()
	 * @method \Bitrix\Iblock\Iblock resetLid()
	 * @method \Bitrix\Iblock\Iblock unsetLid()
	 * @method \string fillLid()
	 * @method \string getCode()
	 * @method \Bitrix\Iblock\Iblock setCode(\string|\Bitrix\Main\DB\SqlExpression $code)
	 * @method bool hasCode()
	 * @method bool isCodeFilled()
	 * @method bool isCodeChanged()
	 * @method \string remindActualCode()
	 * @method \string requireCode()
	 * @method \Bitrix\Iblock\Iblock resetCode()
	 * @method \Bitrix\Iblock\Iblock unsetCode()
	 * @method \string fillCode()
	 * @method \string getApiCode()
	 * @method \Bitrix\Iblock\Iblock setApiCode(\string|\Bitrix\Main\DB\SqlExpression $apiCode)
	 * @method bool hasApiCode()
	 * @method bool isApiCodeFilled()
	 * @method bool isApiCodeChanged()
	 * @method \string remindActualApiCode()
	 * @method \string requireApiCode()
	 * @method \Bitrix\Iblock\Iblock resetApiCode()
	 * @method \Bitrix\Iblock\Iblock unsetApiCode()
	 * @method \string fillApiCode()
	 * @method \boolean getRestOn()
	 * @method \Bitrix\Iblock\Iblock setRestOn(\boolean|\Bitrix\Main\DB\SqlExpression $restOn)
	 * @method bool hasRestOn()
	 * @method bool isRestOnFilled()
	 * @method bool isRestOnChanged()
	 * @method \boolean remindActualRestOn()
	 * @method \boolean requireRestOn()
	 * @method \Bitrix\Iblock\Iblock resetRestOn()
	 * @method \Bitrix\Iblock\Iblock unsetRestOn()
	 * @method \boolean fillRestOn()
	 * @method \string getName()
	 * @method \Bitrix\Iblock\Iblock setName(\string|\Bitrix\Main\DB\SqlExpression $name)
	 * @method bool hasName()
	 * @method bool isNameFilled()
	 * @method bool isNameChanged()
	 * @method \string remindActualName()
	 * @method \string requireName()
	 * @method \Bitrix\Iblock\Iblock resetName()
	 * @method \Bitrix\Iblock\Iblock unsetName()
	 * @method \string fillName()
	 * @method \boolean getActive()
	 * @method \Bitrix\Iblock\Iblock setActive(\boolean|\Bitrix\Main\DB\SqlExpression $active)
	 * @method bool hasActive()
	 * @method bool isActiveFilled()
	 * @method bool isActiveChanged()
	 * @method \boolean remindActualActive()
	 * @method \boolean requireActive()
	 * @method \Bitrix\Iblock\Iblock resetActive()
	 * @method \Bitrix\Iblock\Iblock unsetActive()
	 * @method \boolean fillActive()
	 * @method \int getSort()
	 * @method \Bitrix\Iblock\Iblock setSort(\int|\Bitrix\Main\DB\SqlExpression $sort)
	 * @method bool hasSort()
	 * @method bool isSortFilled()
	 * @method bool isSortChanged()
	 * @method \int remindActualSort()
	 * @method \int requireSort()
	 * @method \Bitrix\Iblock\Iblock resetSort()
	 * @method \Bitrix\Iblock\Iblock unsetSort()
	 * @method \int fillSort()
	 * @method \string getListPageUrl()
	 * @method \Bitrix\Iblock\Iblock setListPageUrl(\string|\Bitrix\Main\DB\SqlExpression $listPageUrl)
	 * @method bool hasListPageUrl()
	 * @method bool isListPageUrlFilled()
	 * @method bool isListPageUrlChanged()
	 * @method \string remindActualListPageUrl()
	 * @method \string requireListPageUrl()
	 * @method \Bitrix\Iblock\Iblock resetListPageUrl()
	 * @method \Bitrix\Iblock\Iblock unsetListPageUrl()
	 * @method \string fillListPageUrl()
	 * @method \string getDetailPageUrl()
	 * @method \Bitrix\Iblock\Iblock setDetailPageUrl(\string|\Bitrix\Main\DB\SqlExpression $detailPageUrl)
	 * @method bool hasDetailPageUrl()
	 * @method bool isDetailPageUrlFilled()
	 * @method bool isDetailPageUrlChanged()
	 * @method \string remindActualDetailPageUrl()
	 * @method \string requireDetailPageUrl()
	 * @method \Bitrix\Iblock\Iblock resetDetailPageUrl()
	 * @method \Bitrix\Iblock\Iblock unsetDetailPageUrl()
	 * @method \string fillDetailPageUrl()
	 * @method \string getSectionPageUrl()
	 * @method \Bitrix\Iblock\Iblock setSectionPageUrl(\string|\Bitrix\Main\DB\SqlExpression $sectionPageUrl)
	 * @method bool hasSectionPageUrl()
	 * @method bool isSectionPageUrlFilled()
	 * @method bool isSectionPageUrlChanged()
	 * @method \string remindActualSectionPageUrl()
	 * @method \string requireSectionPageUrl()
	 * @method \Bitrix\Iblock\Iblock resetSectionPageUrl()
	 * @method \Bitrix\Iblock\Iblock unsetSectionPageUrl()
	 * @method \string fillSectionPageUrl()
	 * @method \string getCanonicalPageUrl()
	 * @method \Bitrix\Iblock\Iblock setCanonicalPageUrl(\string|\Bitrix\Main\DB\SqlExpression $canonicalPageUrl)
	 * @method bool hasCanonicalPageUrl()
	 * @method bool isCanonicalPageUrlFilled()
	 * @method bool isCanonicalPageUrlChanged()
	 * @method \string remindActualCanonicalPageUrl()
	 * @method \string requireCanonicalPageUrl()
	 * @method \Bitrix\Iblock\Iblock resetCanonicalPageUrl()
	 * @method \Bitrix\Iblock\Iblock unsetCanonicalPageUrl()
	 * @method \string fillCanonicalPageUrl()
	 * @method \int getPicture()
	 * @method \Bitrix\Iblock\Iblock setPicture(\int|\Bitrix\Main\DB\SqlExpression $picture)
	 * @method bool hasPicture()
	 * @method bool isPictureFilled()
	 * @method bool isPictureChanged()
	 * @method \int remindActualPicture()
	 * @method \int requirePicture()
	 * @method \Bitrix\Iblock\Iblock resetPicture()
	 * @method \Bitrix\Iblock\Iblock unsetPicture()
	 * @method \int fillPicture()
	 * @method \string getDescription()
	 * @method \Bitrix\Iblock\Iblock setDescription(\string|\Bitrix\Main\DB\SqlExpression $description)
	 * @method bool hasDescription()
	 * @method bool isDescriptionFilled()
	 * @method bool isDescriptionChanged()
	 * @method \string remindActualDescription()
	 * @method \string requireDescription()
	 * @method \Bitrix\Iblock\Iblock resetDescription()
	 * @method \Bitrix\Iblock\Iblock unsetDescription()
	 * @method \string fillDescription()
	 * @method \string getDescriptionType()
	 * @method \Bitrix\Iblock\Iblock setDescriptionType(\string|\Bitrix\Main\DB\SqlExpression $descriptionType)
	 * @method bool hasDescriptionType()
	 * @method bool isDescriptionTypeFilled()
	 * @method bool isDescriptionTypeChanged()
	 * @method \string remindActualDescriptionType()
	 * @method \string requireDescriptionType()
	 * @method \Bitrix\Iblock\Iblock resetDescriptionType()
	 * @method \Bitrix\Iblock\Iblock unsetDescriptionType()
	 * @method \string fillDescriptionType()
	 * @method \string getXmlId()
	 * @method \Bitrix\Iblock\Iblock setXmlId(\string|\Bitrix\Main\DB\SqlExpression $xmlId)
	 * @method bool hasXmlId()
	 * @method bool isXmlIdFilled()
	 * @method bool isXmlIdChanged()
	 * @method \string remindActualXmlId()
	 * @method \string requireXmlId()
	 * @method \Bitrix\Iblock\Iblock resetXmlId()
	 * @method \Bitrix\Iblock\Iblock unsetXmlId()
	 * @method \string fillXmlId()
	 * @method \string getTmpId()
	 * @method \Bitrix\Iblock\Iblock setTmpId(\string|\Bitrix\Main\DB\SqlExpression $tmpId)
	 * @method bool hasTmpId()
	 * @method bool isTmpIdFilled()
	 * @method bool isTmpIdChanged()
	 * @method \string remindActualTmpId()
	 * @method \string requireTmpId()
	 * @method \Bitrix\Iblock\Iblock resetTmpId()
	 * @method \Bitrix\Iblock\Iblock unsetTmpId()
	 * @method \string fillTmpId()
	 * @method \boolean getIndexElement()
	 * @method \Bitrix\Iblock\Iblock setIndexElement(\boolean|\Bitrix\Main\DB\SqlExpression $indexElement)
	 * @method bool hasIndexElement()
	 * @method bool isIndexElementFilled()
	 * @method bool isIndexElementChanged()
	 * @method \boolean remindActualIndexElement()
	 * @method \boolean requireIndexElement()
	 * @method \Bitrix\Iblock\Iblock resetIndexElement()
	 * @method \Bitrix\Iblock\Iblock unsetIndexElement()
	 * @method \boolean fillIndexElement()
	 * @method \boolean getIndexSection()
	 * @method \Bitrix\Iblock\Iblock setIndexSection(\boolean|\Bitrix\Main\DB\SqlExpression $indexSection)
	 * @method bool hasIndexSection()
	 * @method bool isIndexSectionFilled()
	 * @method bool isIndexSectionChanged()
	 * @method \boolean remindActualIndexSection()
	 * @method \boolean requireIndexSection()
	 * @method \Bitrix\Iblock\Iblock resetIndexSection()
	 * @method \Bitrix\Iblock\Iblock unsetIndexSection()
	 * @method \boolean fillIndexSection()
	 * @method \boolean getWorkflow()
	 * @method \Bitrix\Iblock\Iblock setWorkflow(\boolean|\Bitrix\Main\DB\SqlExpression $workflow)
	 * @method bool hasWorkflow()
	 * @method bool isWorkflowFilled()
	 * @method bool isWorkflowChanged()
	 * @method \boolean remindActualWorkflow()
	 * @method \boolean requireWorkflow()
	 * @method \Bitrix\Iblock\Iblock resetWorkflow()
	 * @method \Bitrix\Iblock\Iblock unsetWorkflow()
	 * @method \boolean fillWorkflow()
	 * @method \boolean getBizproc()
	 * @method \Bitrix\Iblock\Iblock setBizproc(\boolean|\Bitrix\Main\DB\SqlExpression $bizproc)
	 * @method bool hasBizproc()
	 * @method bool isBizprocFilled()
	 * @method bool isBizprocChanged()
	 * @method \boolean remindActualBizproc()
	 * @method \boolean requireBizproc()
	 * @method \Bitrix\Iblock\Iblock resetBizproc()
	 * @method \Bitrix\Iblock\Iblock unsetBizproc()
	 * @method \boolean fillBizproc()
	 * @method \string getSectionChooser()
	 * @method \Bitrix\Iblock\Iblock setSectionChooser(\string|\Bitrix\Main\DB\SqlExpression $sectionChooser)
	 * @method bool hasSectionChooser()
	 * @method bool isSectionChooserFilled()
	 * @method bool isSectionChooserChanged()
	 * @method \string remindActualSectionChooser()
	 * @method \string requireSectionChooser()
	 * @method \Bitrix\Iblock\Iblock resetSectionChooser()
	 * @method \Bitrix\Iblock\Iblock unsetSectionChooser()
	 * @method \string fillSectionChooser()
	 * @method \string getListMode()
	 * @method \Bitrix\Iblock\Iblock setListMode(\string|\Bitrix\Main\DB\SqlExpression $listMode)
	 * @method bool hasListMode()
	 * @method bool isListModeFilled()
	 * @method bool isListModeChanged()
	 * @method \string remindActualListMode()
	 * @method \string requireListMode()
	 * @method \Bitrix\Iblock\Iblock resetListMode()
	 * @method \Bitrix\Iblock\Iblock unsetListMode()
	 * @method \string fillListMode()
	 * @method \string getRightsMode()
	 * @method \Bitrix\Iblock\Iblock setRightsMode(\string|\Bitrix\Main\DB\SqlExpression $rightsMode)
	 * @method bool hasRightsMode()
	 * @method bool isRightsModeFilled()
	 * @method bool isRightsModeChanged()
	 * @method \string remindActualRightsMode()
	 * @method \string requireRightsMode()
	 * @method \Bitrix\Iblock\Iblock resetRightsMode()
	 * @method \Bitrix\Iblock\Iblock unsetRightsMode()
	 * @method \string fillRightsMode()
	 * @method \boolean getSectionProperty()
	 * @method \Bitrix\Iblock\Iblock setSectionProperty(\boolean|\Bitrix\Main\DB\SqlExpression $sectionProperty)
	 * @method bool hasSectionProperty()
	 * @method bool isSectionPropertyFilled()
	 * @method bool isSectionPropertyChanged()
	 * @method \boolean remindActualSectionProperty()
	 * @method \boolean requireSectionProperty()
	 * @method \Bitrix\Iblock\Iblock resetSectionProperty()
	 * @method \Bitrix\Iblock\Iblock unsetSectionProperty()
	 * @method \boolean fillSectionProperty()
	 * @method \string getPropertyIndex()
	 * @method \Bitrix\Iblock\Iblock setPropertyIndex(\string|\Bitrix\Main\DB\SqlExpression $propertyIndex)
	 * @method bool hasPropertyIndex()
	 * @method bool isPropertyIndexFilled()
	 * @method bool isPropertyIndexChanged()
	 * @method \string remindActualPropertyIndex()
	 * @method \string requirePropertyIndex()
	 * @method \Bitrix\Iblock\Iblock resetPropertyIndex()
	 * @method \Bitrix\Iblock\Iblock unsetPropertyIndex()
	 * @method \string fillPropertyIndex()
	 * @method \string getVersion()
	 * @method \Bitrix\Iblock\Iblock setVersion(\string|\Bitrix\Main\DB\SqlExpression $version)
	 * @method bool hasVersion()
	 * @method bool isVersionFilled()
	 * @method bool isVersionChanged()
	 * @method \string remindActualVersion()
	 * @method \string requireVersion()
	 * @method \Bitrix\Iblock\Iblock resetVersion()
	 * @method \Bitrix\Iblock\Iblock unsetVersion()
	 * @method \string fillVersion()
	 * @method \int getLastConvElement()
	 * @method \Bitrix\Iblock\Iblock setLastConvElement(\int|\Bitrix\Main\DB\SqlExpression $lastConvElement)
	 * @method bool hasLastConvElement()
	 * @method bool isLastConvElementFilled()
	 * @method bool isLastConvElementChanged()
	 * @method \int remindActualLastConvElement()
	 * @method \int requireLastConvElement()
	 * @method \Bitrix\Iblock\Iblock resetLastConvElement()
	 * @method \Bitrix\Iblock\Iblock unsetLastConvElement()
	 * @method \int fillLastConvElement()
	 * @method \int getSocnetGroupId()
	 * @method \Bitrix\Iblock\Iblock setSocnetGroupId(\int|\Bitrix\Main\DB\SqlExpression $socnetGroupId)
	 * @method bool hasSocnetGroupId()
	 * @method bool isSocnetGroupIdFilled()
	 * @method bool isSocnetGroupIdChanged()
	 * @method \int remindActualSocnetGroupId()
	 * @method \int requireSocnetGroupId()
	 * @method \Bitrix\Iblock\Iblock resetSocnetGroupId()
	 * @method \Bitrix\Iblock\Iblock unsetSocnetGroupId()
	 * @method \int fillSocnetGroupId()
	 * @method \string getEditFileBefore()
	 * @method \Bitrix\Iblock\Iblock setEditFileBefore(\string|\Bitrix\Main\DB\SqlExpression $editFileBefore)
	 * @method bool hasEditFileBefore()
	 * @method bool isEditFileBeforeFilled()
	 * @method bool isEditFileBeforeChanged()
	 * @method \string remindActualEditFileBefore()
	 * @method \string requireEditFileBefore()
	 * @method \Bitrix\Iblock\Iblock resetEditFileBefore()
	 * @method \Bitrix\Iblock\Iblock unsetEditFileBefore()
	 * @method \string fillEditFileBefore()
	 * @method \string getEditFileAfter()
	 * @method \Bitrix\Iblock\Iblock setEditFileAfter(\string|\Bitrix\Main\DB\SqlExpression $editFileAfter)
	 * @method bool hasEditFileAfter()
	 * @method bool isEditFileAfterFilled()
	 * @method bool isEditFileAfterChanged()
	 * @method \string remindActualEditFileAfter()
	 * @method \string requireEditFileAfter()
	 * @method \Bitrix\Iblock\Iblock resetEditFileAfter()
	 * @method \Bitrix\Iblock\Iblock unsetEditFileAfter()
	 * @method \string fillEditFileAfter()
	 * @method \Bitrix\Iblock\EO_Type getType()
	 * @method \Bitrix\Iblock\EO_Type remindActualType()
	 * @method \Bitrix\Iblock\EO_Type requireType()
	 * @method \Bitrix\Iblock\Iblock setType(\Bitrix\Iblock\EO_Type $object)
	 * @method \Bitrix\Iblock\Iblock resetType()
	 * @method \Bitrix\Iblock\Iblock unsetType()
	 * @method bool hasType()
	 * @method bool isTypeFilled()
	 * @method bool isTypeChanged()
	 * @method \Bitrix\Iblock\EO_Type fillType()
	 * @method \boolean getFulltextIndex()
	 * @method \Bitrix\Iblock\Iblock setFulltextIndex(\boolean|\Bitrix\Main\DB\SqlExpression $fulltextIndex)
	 * @method bool hasFulltextIndex()
	 * @method bool isFulltextIndexFilled()
	 * @method bool isFulltextIndexChanged()
	 * @method \boolean remindActualFulltextIndex()
	 * @method \boolean requireFulltextIndex()
	 * @method \Bitrix\Iblock\Iblock resetFulltextIndex()
	 * @method \Bitrix\Iblock\Iblock unsetFulltextIndex()
	 * @method \boolean fillFulltextIndex()
	 * @method \Bitrix\Iblock\EO_Property_Collection getProperties()
	 * @method \Bitrix\Iblock\EO_Property_Collection requireProperties()
	 * @method \Bitrix\Iblock\EO_Property_Collection fillProperties()
	 * @method bool hasProperties()
	 * @method bool isPropertiesFilled()
	 * @method bool isPropertiesChanged()
	 * @method void addToProperties(\Bitrix\Iblock\Property $property)
	 * @method void removeFromProperties(\Bitrix\Iblock\Property $property)
	 * @method void removeAllProperties()
	 * @method \Bitrix\Iblock\Iblock resetProperties()
	 * @method \Bitrix\Iblock\Iblock unsetProperties()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Bitrix\Iblock\Iblock set($fieldName, $value)
	 * @method \Bitrix\Iblock\Iblock reset($fieldName)
	 * @method \Bitrix\Iblock\Iblock unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method mixed fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Bitrix\Iblock\Iblock wakeUp($data)
	 */
	class EO_Iblock extends \Bitrix\Main\ORM\Objectify\EntityObject {
		/* @var \Bitrix\Iblock\IblockTable */
		static public $dataClass = '\Bitrix\Iblock\IblockTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Iblock {
	/**
	 * EO_Iblock_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getIdList()
	 * @method \Bitrix\Main\Type\DateTime[] getTimestampXList()
	 * @method \Bitrix\Main\Type\DateTime[] fillTimestampX()
	 * @method \string[] getIblockTypeIdList()
	 * @method \string[] fillIblockTypeId()
	 * @method \string[] getLidList()
	 * @method \string[] fillLid()
	 * @method \string[] getCodeList()
	 * @method \string[] fillCode()
	 * @method \string[] getApiCodeList()
	 * @method \string[] fillApiCode()
	 * @method \boolean[] getRestOnList()
	 * @method \boolean[] fillRestOn()
	 * @method \string[] getNameList()
	 * @method \string[] fillName()
	 * @method \boolean[] getActiveList()
	 * @method \boolean[] fillActive()
	 * @method \int[] getSortList()
	 * @method \int[] fillSort()
	 * @method \string[] getListPageUrlList()
	 * @method \string[] fillListPageUrl()
	 * @method \string[] getDetailPageUrlList()
	 * @method \string[] fillDetailPageUrl()
	 * @method \string[] getSectionPageUrlList()
	 * @method \string[] fillSectionPageUrl()
	 * @method \string[] getCanonicalPageUrlList()
	 * @method \string[] fillCanonicalPageUrl()
	 * @method \int[] getPictureList()
	 * @method \int[] fillPicture()
	 * @method \string[] getDescriptionList()
	 * @method \string[] fillDescription()
	 * @method \string[] getDescriptionTypeList()
	 * @method \string[] fillDescriptionType()
	 * @method \string[] getXmlIdList()
	 * @method \string[] fillXmlId()
	 * @method \string[] getTmpIdList()
	 * @method \string[] fillTmpId()
	 * @method \boolean[] getIndexElementList()
	 * @method \boolean[] fillIndexElement()
	 * @method \boolean[] getIndexSectionList()
	 * @method \boolean[] fillIndexSection()
	 * @method \boolean[] getWorkflowList()
	 * @method \boolean[] fillWorkflow()
	 * @method \boolean[] getBizprocList()
	 * @method \boolean[] fillBizproc()
	 * @method \string[] getSectionChooserList()
	 * @method \string[] fillSectionChooser()
	 * @method \string[] getListModeList()
	 * @method \string[] fillListMode()
	 * @method \string[] getRightsModeList()
	 * @method \string[] fillRightsMode()
	 * @method \boolean[] getSectionPropertyList()
	 * @method \boolean[] fillSectionProperty()
	 * @method \string[] getPropertyIndexList()
	 * @method \string[] fillPropertyIndex()
	 * @method \string[] getVersionList()
	 * @method \string[] fillVersion()
	 * @method \int[] getLastConvElementList()
	 * @method \int[] fillLastConvElement()
	 * @method \int[] getSocnetGroupIdList()
	 * @method \int[] fillSocnetGroupId()
	 * @method \string[] getEditFileBeforeList()
	 * @method \string[] fillEditFileBefore()
	 * @method \string[] getEditFileAfterList()
	 * @method \string[] fillEditFileAfter()
	 * @method \Bitrix\Iblock\EO_Type[] getTypeList()
	 * @method \Bitrix\Iblock\EO_Iblock_Collection getTypeCollection()
	 * @method \Bitrix\Iblock\EO_Type_Collection fillType()
	 * @method \boolean[] getFulltextIndexList()
	 * @method \boolean[] fillFulltextIndex()
	 * @method \Bitrix\Iblock\EO_Property_Collection[] getPropertiesList()
	 * @method \Bitrix\Iblock\EO_Property_Collection getPropertiesCollection()
	 * @method \Bitrix\Iblock\EO_Property_Collection fillProperties()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Bitrix\Iblock\Iblock $object)
	 * @method bool has(\Bitrix\Iblock\Iblock $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Bitrix\Iblock\Iblock getByPrimary($primary)
	 * @method \Bitrix\Iblock\Iblock[] getAll()
	 * @method bool remove(\Bitrix\Iblock\Iblock $object)
	 * @method void removeByPrimary($primary)
	 * @method array|\Bitrix\Main\ORM\Objectify\Collection|null fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Bitrix\Iblock\EO_Iblock_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Bitrix\Iblock\Iblock current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 * @method \Bitrix\Iblock\EO_Iblock_Collection merge(?\Bitrix\Iblock\EO_Iblock_Collection $collection)
	 * @method bool isEmpty()
	 * @method array collectValues(int $valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, int $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL, bool $recursive = false)
	 * @method \Bitrix\Iblock\Iblock|null find(callable $callback)
	 * @method \Bitrix\Iblock\EO_Iblock_Collection filter(callable $callback)
	 */
	class EO_Iblock_Collection extends \Bitrix\Main\ORM\Objectify\Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Iblock\IblockTable */
		static public $dataClass = '\Bitrix\Iblock\IblockTable';
	}
}
namespace Bitrix\Iblock {
	/**
	 * @method static EO_Iblock_Query query()
	 * @method static EO_Iblock_Result getByPrimary($primary, array $parameters = [])
	 * @method static EO_Iblock_Result getById($id)
	 * @method static EO_Iblock_Result getList(array $parameters = [])
	 * @method static EO_Iblock_Entity getEntity()
	 * @method static \Bitrix\Iblock\Iblock createObject($setDefaultValues = true)
	 * @method static \Bitrix\Iblock\EO_Iblock_Collection createCollection()
	 * @method static \Bitrix\Iblock\Iblock wakeUpObject($row)
	 * @method static \Bitrix\Iblock\EO_Iblock_Collection wakeUpCollection($rows)
	 */
	class IblockTable extends \Bitrix\Main\ORM\Data\DataManager {}
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_Iblock_Result exec()
	 * @method \Bitrix\Iblock\Iblock fetchObject()
	 * @method \Bitrix\Iblock\EO_Iblock_Collection fetchCollection()
	 */
	class EO_Iblock_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Bitrix\Iblock\Iblock fetchObject()
	 * @method \Bitrix\Iblock\EO_Iblock_Collection fetchCollection()
	 */
	class EO_Iblock_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Bitrix\Iblock\Iblock createObject($setDefaultValues = true)
	 * @method \Bitrix\Iblock\EO_Iblock_Collection createCollection()
	 * @method \Bitrix\Iblock\Iblock wakeUpObject($row)
	 * @method \Bitrix\Iblock\EO_Iblock_Collection wakeUpCollection($rows)
	 */
	class EO_Iblock_Entity extends \Bitrix\Main\ORM\Entity {}
}
/* ORMENTITYANNOTATION:Bitrix\Iblock\PropertyTable */
namespace Bitrix\Iblock {
	/**
	 * Property
	 * @see \Bitrix\Iblock\PropertyTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getId()
	 * @method \Bitrix\Iblock\Property setId(\int|\Bitrix\Main\DB\SqlExpression $id)
	 * @method bool hasId()
	 * @method bool isIdFilled()
	 * @method bool isIdChanged()
	 * @method \Bitrix\Main\Type\DateTime getTimestampX()
	 * @method \Bitrix\Iblock\Property setTimestampX(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $timestampX)
	 * @method bool hasTimestampX()
	 * @method bool isTimestampXFilled()
	 * @method bool isTimestampXChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualTimestampX()
	 * @method \Bitrix\Main\Type\DateTime requireTimestampX()
	 * @method \Bitrix\Iblock\Property resetTimestampX()
	 * @method \Bitrix\Iblock\Property unsetTimestampX()
	 * @method \Bitrix\Main\Type\DateTime fillTimestampX()
	 * @method \int getIblockId()
	 * @method \Bitrix\Iblock\Property setIblockId(\int|\Bitrix\Main\DB\SqlExpression $iblockId)
	 * @method bool hasIblockId()
	 * @method bool isIblockIdFilled()
	 * @method bool isIblockIdChanged()
	 * @method \int remindActualIblockId()
	 * @method \int requireIblockId()
	 * @method \Bitrix\Iblock\Property resetIblockId()
	 * @method \Bitrix\Iblock\Property unsetIblockId()
	 * @method \int fillIblockId()
	 * @method \string getName()
	 * @method \Bitrix\Iblock\Property setName(\string|\Bitrix\Main\DB\SqlExpression $name)
	 * @method bool hasName()
	 * @method bool isNameFilled()
	 * @method bool isNameChanged()
	 * @method \string remindActualName()
	 * @method \string requireName()
	 * @method \Bitrix\Iblock\Property resetName()
	 * @method \Bitrix\Iblock\Property unsetName()
	 * @method \string fillName()
	 * @method \boolean getActive()
	 * @method \Bitrix\Iblock\Property setActive(\boolean|\Bitrix\Main\DB\SqlExpression $active)
	 * @method bool hasActive()
	 * @method bool isActiveFilled()
	 * @method bool isActiveChanged()
	 * @method \boolean remindActualActive()
	 * @method \boolean requireActive()
	 * @method \Bitrix\Iblock\Property resetActive()
	 * @method \Bitrix\Iblock\Property unsetActive()
	 * @method \boolean fillActive()
	 * @method \int getSort()
	 * @method \Bitrix\Iblock\Property setSort(\int|\Bitrix\Main\DB\SqlExpression $sort)
	 * @method bool hasSort()
	 * @method bool isSortFilled()
	 * @method bool isSortChanged()
	 * @method \int remindActualSort()
	 * @method \int requireSort()
	 * @method \Bitrix\Iblock\Property resetSort()
	 * @method \Bitrix\Iblock\Property unsetSort()
	 * @method \int fillSort()
	 * @method null|\string getCode()
	 * @method \Bitrix\Iblock\Property setCode(null|\string|\Bitrix\Main\DB\SqlExpression $code)
	 * @method bool hasCode()
	 * @method bool isCodeFilled()
	 * @method bool isCodeChanged()
	 * @method null|\string remindActualCode()
	 * @method null|\string requireCode()
	 * @method \Bitrix\Iblock\Property resetCode()
	 * @method \Bitrix\Iblock\Property unsetCode()
	 * @method null|\string fillCode()
	 * @method null|\string getDefaultValue()
	 * @method \Bitrix\Iblock\Property setDefaultValue(null|\string|\Bitrix\Main\DB\SqlExpression $defaultValue)
	 * @method bool hasDefaultValue()
	 * @method bool isDefaultValueFilled()
	 * @method bool isDefaultValueChanged()
	 * @method null|\string remindActualDefaultValue()
	 * @method null|\string requireDefaultValue()
	 * @method \Bitrix\Iblock\Property resetDefaultValue()
	 * @method \Bitrix\Iblock\Property unsetDefaultValue()
	 * @method null|\string fillDefaultValue()
	 * @method \string getPropertyType()
	 * @method \Bitrix\Iblock\Property setPropertyType(\string|\Bitrix\Main\DB\SqlExpression $propertyType)
	 * @method bool hasPropertyType()
	 * @method bool isPropertyTypeFilled()
	 * @method bool isPropertyTypeChanged()
	 * @method \string remindActualPropertyType()
	 * @method \string requirePropertyType()
	 * @method \Bitrix\Iblock\Property resetPropertyType()
	 * @method \Bitrix\Iblock\Property unsetPropertyType()
	 * @method \string fillPropertyType()
	 * @method \int getRowCount()
	 * @method \Bitrix\Iblock\Property setRowCount(\int|\Bitrix\Main\DB\SqlExpression $rowCount)
	 * @method bool hasRowCount()
	 * @method bool isRowCountFilled()
	 * @method bool isRowCountChanged()
	 * @method \int remindActualRowCount()
	 * @method \int requireRowCount()
	 * @method \Bitrix\Iblock\Property resetRowCount()
	 * @method \Bitrix\Iblock\Property unsetRowCount()
	 * @method \int fillRowCount()
	 * @method \int getColCount()
	 * @method \Bitrix\Iblock\Property setColCount(\int|\Bitrix\Main\DB\SqlExpression $colCount)
	 * @method bool hasColCount()
	 * @method bool isColCountFilled()
	 * @method bool isColCountChanged()
	 * @method \int remindActualColCount()
	 * @method \int requireColCount()
	 * @method \Bitrix\Iblock\Property resetColCount()
	 * @method \Bitrix\Iblock\Property unsetColCount()
	 * @method \int fillColCount()
	 * @method \string getListType()
	 * @method \Bitrix\Iblock\Property setListType(\string|\Bitrix\Main\DB\SqlExpression $listType)
	 * @method bool hasListType()
	 * @method bool isListTypeFilled()
	 * @method bool isListTypeChanged()
	 * @method \string remindActualListType()
	 * @method \string requireListType()
	 * @method \Bitrix\Iblock\Property resetListType()
	 * @method \Bitrix\Iblock\Property unsetListType()
	 * @method \string fillListType()
	 * @method \boolean getMultiple()
	 * @method \Bitrix\Iblock\Property setMultiple(\boolean|\Bitrix\Main\DB\SqlExpression $multiple)
	 * @method bool hasMultiple()
	 * @method bool isMultipleFilled()
	 * @method bool isMultipleChanged()
	 * @method \boolean remindActualMultiple()
	 * @method \boolean requireMultiple()
	 * @method \Bitrix\Iblock\Property resetMultiple()
	 * @method \Bitrix\Iblock\Property unsetMultiple()
	 * @method \boolean fillMultiple()
	 * @method null|\string getXmlId()
	 * @method \Bitrix\Iblock\Property setXmlId(null|\string|\Bitrix\Main\DB\SqlExpression $xmlId)
	 * @method bool hasXmlId()
	 * @method bool isXmlIdFilled()
	 * @method bool isXmlIdChanged()
	 * @method null|\string remindActualXmlId()
	 * @method null|\string requireXmlId()
	 * @method \Bitrix\Iblock\Property resetXmlId()
	 * @method \Bitrix\Iblock\Property unsetXmlId()
	 * @method null|\string fillXmlId()
	 * @method null|\string getFileType()
	 * @method \Bitrix\Iblock\Property setFileType(null|\string|\Bitrix\Main\DB\SqlExpression $fileType)
	 * @method bool hasFileType()
	 * @method bool isFileTypeFilled()
	 * @method bool isFileTypeChanged()
	 * @method null|\string remindActualFileType()
	 * @method null|\string requireFileType()
	 * @method \Bitrix\Iblock\Property resetFileType()
	 * @method \Bitrix\Iblock\Property unsetFileType()
	 * @method null|\string fillFileType()
	 * @method null|\int getMultipleCnt()
	 * @method \Bitrix\Iblock\Property setMultipleCnt(null|\int|\Bitrix\Main\DB\SqlExpression $multipleCnt)
	 * @method bool hasMultipleCnt()
	 * @method bool isMultipleCntFilled()
	 * @method bool isMultipleCntChanged()
	 * @method null|\int remindActualMultipleCnt()
	 * @method null|\int requireMultipleCnt()
	 * @method \Bitrix\Iblock\Property resetMultipleCnt()
	 * @method \Bitrix\Iblock\Property unsetMultipleCnt()
	 * @method null|\int fillMultipleCnt()
	 * @method null|\string getTmpId()
	 * @method \Bitrix\Iblock\Property setTmpId(null|\string|\Bitrix\Main\DB\SqlExpression $tmpId)
	 * @method bool hasTmpId()
	 * @method bool isTmpIdFilled()
	 * @method bool isTmpIdChanged()
	 * @method null|\string remindActualTmpId()
	 * @method null|\string requireTmpId()
	 * @method \Bitrix\Iblock\Property resetTmpId()
	 * @method \Bitrix\Iblock\Property unsetTmpId()
	 * @method null|\string fillTmpId()
	 * @method null|\int getLinkIblockId()
	 * @method \Bitrix\Iblock\Property setLinkIblockId(null|\int|\Bitrix\Main\DB\SqlExpression $linkIblockId)
	 * @method bool hasLinkIblockId()
	 * @method bool isLinkIblockIdFilled()
	 * @method bool isLinkIblockIdChanged()
	 * @method null|\int remindActualLinkIblockId()
	 * @method null|\int requireLinkIblockId()
	 * @method \Bitrix\Iblock\Property resetLinkIblockId()
	 * @method \Bitrix\Iblock\Property unsetLinkIblockId()
	 * @method null|\int fillLinkIblockId()
	 * @method \boolean getWithDescription()
	 * @method \Bitrix\Iblock\Property setWithDescription(\boolean|\Bitrix\Main\DB\SqlExpression $withDescription)
	 * @method bool hasWithDescription()
	 * @method bool isWithDescriptionFilled()
	 * @method bool isWithDescriptionChanged()
	 * @method \boolean remindActualWithDescription()
	 * @method \boolean requireWithDescription()
	 * @method \Bitrix\Iblock\Property resetWithDescription()
	 * @method \Bitrix\Iblock\Property unsetWithDescription()
	 * @method \boolean fillWithDescription()
	 * @method \boolean getSearchable()
	 * @method \Bitrix\Iblock\Property setSearchable(\boolean|\Bitrix\Main\DB\SqlExpression $searchable)
	 * @method bool hasSearchable()
	 * @method bool isSearchableFilled()
	 * @method bool isSearchableChanged()
	 * @method \boolean remindActualSearchable()
	 * @method \boolean requireSearchable()
	 * @method \Bitrix\Iblock\Property resetSearchable()
	 * @method \Bitrix\Iblock\Property unsetSearchable()
	 * @method \boolean fillSearchable()
	 * @method \boolean getFiltrable()
	 * @method \Bitrix\Iblock\Property setFiltrable(\boolean|\Bitrix\Main\DB\SqlExpression $filtrable)
	 * @method bool hasFiltrable()
	 * @method bool isFiltrableFilled()
	 * @method bool isFiltrableChanged()
	 * @method \boolean remindActualFiltrable()
	 * @method \boolean requireFiltrable()
	 * @method \Bitrix\Iblock\Property resetFiltrable()
	 * @method \Bitrix\Iblock\Property unsetFiltrable()
	 * @method \boolean fillFiltrable()
	 * @method \boolean getIsRequired()
	 * @method \Bitrix\Iblock\Property setIsRequired(\boolean|\Bitrix\Main\DB\SqlExpression $isRequired)
	 * @method bool hasIsRequired()
	 * @method bool isIsRequiredFilled()
	 * @method bool isIsRequiredChanged()
	 * @method \boolean remindActualIsRequired()
	 * @method \boolean requireIsRequired()
	 * @method \Bitrix\Iblock\Property resetIsRequired()
	 * @method \Bitrix\Iblock\Property unsetIsRequired()
	 * @method \boolean fillIsRequired()
	 * @method \string getVersion()
	 * @method \Bitrix\Iblock\Property setVersion(\string|\Bitrix\Main\DB\SqlExpression $version)
	 * @method bool hasVersion()
	 * @method bool isVersionFilled()
	 * @method bool isVersionChanged()
	 * @method \string remindActualVersion()
	 * @method \string requireVersion()
	 * @method \Bitrix\Iblock\Property resetVersion()
	 * @method \Bitrix\Iblock\Property unsetVersion()
	 * @method \string fillVersion()
	 * @method null|\string getUserType()
	 * @method \Bitrix\Iblock\Property setUserType(null|\string|\Bitrix\Main\DB\SqlExpression $userType)
	 * @method bool hasUserType()
	 * @method bool isUserTypeFilled()
	 * @method bool isUserTypeChanged()
	 * @method null|\string remindActualUserType()
	 * @method null|\string requireUserType()
	 * @method \Bitrix\Iblock\Property resetUserType()
	 * @method \Bitrix\Iblock\Property unsetUserType()
	 * @method null|\string fillUserType()
	 * @method null|array getUserTypeSettingsList()
	 * @method \Bitrix\Iblock\Property setUserTypeSettingsList(null|array|\Bitrix\Main\DB\SqlExpression $userTypeSettingsList)
	 * @method bool hasUserTypeSettingsList()
	 * @method bool isUserTypeSettingsListFilled()
	 * @method bool isUserTypeSettingsListChanged()
	 * @method null|array remindActualUserTypeSettingsList()
	 * @method null|array requireUserTypeSettingsList()
	 * @method \Bitrix\Iblock\Property resetUserTypeSettingsList()
	 * @method \Bitrix\Iblock\Property unsetUserTypeSettingsList()
	 * @method null|array fillUserTypeSettingsList()
	 * @method null|\string getUserTypeSettings()
	 * @method \Bitrix\Iblock\Property setUserTypeSettings(null|\string|\Bitrix\Main\DB\SqlExpression $userTypeSettings)
	 * @method bool hasUserTypeSettings()
	 * @method bool isUserTypeSettingsFilled()
	 * @method bool isUserTypeSettingsChanged()
	 * @method null|\string remindActualUserTypeSettings()
	 * @method null|\string requireUserTypeSettings()
	 * @method \Bitrix\Iblock\Property resetUserTypeSettings()
	 * @method \Bitrix\Iblock\Property unsetUserTypeSettings()
	 * @method null|\string fillUserTypeSettings()
	 * @method null|\string getHint()
	 * @method \Bitrix\Iblock\Property setHint(null|\string|\Bitrix\Main\DB\SqlExpression $hint)
	 * @method bool hasHint()
	 * @method bool isHintFilled()
	 * @method bool isHintChanged()
	 * @method null|\string remindActualHint()
	 * @method null|\string requireHint()
	 * @method \Bitrix\Iblock\Property resetHint()
	 * @method \Bitrix\Iblock\Property unsetHint()
	 * @method null|\string fillHint()
	 * @method \Bitrix\Iblock\Iblock getLinkIblock()
	 * @method \Bitrix\Iblock\Iblock remindActualLinkIblock()
	 * @method \Bitrix\Iblock\Iblock requireLinkIblock()
	 * @method \Bitrix\Iblock\Property setLinkIblock(\Bitrix\Iblock\Iblock $object)
	 * @method \Bitrix\Iblock\Property resetLinkIblock()
	 * @method \Bitrix\Iblock\Property unsetLinkIblock()
	 * @method bool hasLinkIblock()
	 * @method bool isLinkIblockFilled()
	 * @method bool isLinkIblockChanged()
	 * @method \Bitrix\Iblock\Iblock fillLinkIblock()
	 * @method \Bitrix\Iblock\Iblock getIblock()
	 * @method \Bitrix\Iblock\Iblock remindActualIblock()
	 * @method \Bitrix\Iblock\Iblock requireIblock()
	 * @method \Bitrix\Iblock\Property setIblock(\Bitrix\Iblock\Iblock $object)
	 * @method \Bitrix\Iblock\Property resetIblock()
	 * @method \Bitrix\Iblock\Property unsetIblock()
	 * @method bool hasIblock()
	 * @method bool isIblockFilled()
	 * @method bool isIblockChanged()
	 * @method \Bitrix\Iblock\Iblock fillIblock()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Bitrix\Iblock\Property set($fieldName, $value)
	 * @method \Bitrix\Iblock\Property reset($fieldName)
	 * @method \Bitrix\Iblock\Property unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method mixed fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Bitrix\Iblock\Property wakeUp($data)
	 */
	class EO_Property extends \Bitrix\Main\ORM\Objectify\EntityObject {
		/* @var \Bitrix\Iblock\PropertyTable */
		static public $dataClass = '\Bitrix\Iblock\PropertyTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Iblock {
	/**
	 * EO_Property_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getIdList()
	 * @method \Bitrix\Main\Type\DateTime[] getTimestampXList()
	 * @method \Bitrix\Main\Type\DateTime[] fillTimestampX()
	 * @method \int[] getIblockIdList()
	 * @method \int[] fillIblockId()
	 * @method \string[] getNameList()
	 * @method \string[] fillName()
	 * @method \boolean[] getActiveList()
	 * @method \boolean[] fillActive()
	 * @method \int[] getSortList()
	 * @method \int[] fillSort()
	 * @method null|\string[] getCodeList()
	 * @method null|\string[] fillCode()
	 * @method null|\string[] getDefaultValueList()
	 * @method null|\string[] fillDefaultValue()
	 * @method \string[] getPropertyTypeList()
	 * @method \string[] fillPropertyType()
	 * @method \int[] getRowCountList()
	 * @method \int[] fillRowCount()
	 * @method \int[] getColCountList()
	 * @method \int[] fillColCount()
	 * @method \string[] getListTypeList()
	 * @method \string[] fillListType()
	 * @method \boolean[] getMultipleList()
	 * @method \boolean[] fillMultiple()
	 * @method null|\string[] getXmlIdList()
	 * @method null|\string[] fillXmlId()
	 * @method null|\string[] getFileTypeList()
	 * @method null|\string[] fillFileType()
	 * @method null|\int[] getMultipleCntList()
	 * @method null|\int[] fillMultipleCnt()
	 * @method null|\string[] getTmpIdList()
	 * @method null|\string[] fillTmpId()
	 * @method null|\int[] getLinkIblockIdList()
	 * @method null|\int[] fillLinkIblockId()
	 * @method \boolean[] getWithDescriptionList()
	 * @method \boolean[] fillWithDescription()
	 * @method \boolean[] getSearchableList()
	 * @method \boolean[] fillSearchable()
	 * @method \boolean[] getFiltrableList()
	 * @method \boolean[] fillFiltrable()
	 * @method \boolean[] getIsRequiredList()
	 * @method \boolean[] fillIsRequired()
	 * @method \string[] getVersionList()
	 * @method \string[] fillVersion()
	 * @method null|\string[] getUserTypeList()
	 * @method null|\string[] fillUserType()
	 * @method null|array[] getUserTypeSettingsListList()
	 * @method null|array[] fillUserTypeSettingsList()
	 * @method null|\string[] getUserTypeSettingsList()
	 * @method null|\string[] fillUserTypeSettings()
	 * @method null|\string[] getHintList()
	 * @method null|\string[] fillHint()
	 * @method \Bitrix\Iblock\Iblock[] getLinkIblockList()
	 * @method \Bitrix\Iblock\EO_Property_Collection getLinkIblockCollection()
	 * @method \Bitrix\Iblock\EO_Iblock_Collection fillLinkIblock()
	 * @method \Bitrix\Iblock\Iblock[] getIblockList()
	 * @method \Bitrix\Iblock\EO_Property_Collection getIblockCollection()
	 * @method \Bitrix\Iblock\EO_Iblock_Collection fillIblock()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Bitrix\Iblock\Property $object)
	 * @method bool has(\Bitrix\Iblock\Property $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Bitrix\Iblock\Property getByPrimary($primary)
	 * @method \Bitrix\Iblock\Property[] getAll()
	 * @method bool remove(\Bitrix\Iblock\Property $object)
	 * @method void removeByPrimary($primary)
	 * @method array|\Bitrix\Main\ORM\Objectify\Collection|null fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Bitrix\Iblock\EO_Property_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Bitrix\Iblock\Property current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 * @method \Bitrix\Iblock\EO_Property_Collection merge(?\Bitrix\Iblock\EO_Property_Collection $collection)
	 * @method bool isEmpty()
	 * @method array collectValues(int $valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, int $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL, bool $recursive = false)
	 * @method \Bitrix\Iblock\Property|null find(callable $callback)
	 * @method \Bitrix\Iblock\EO_Property_Collection filter(callable $callback)
	 */
	class EO_Property_Collection extends \Bitrix\Main\ORM\Objectify\Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Iblock\PropertyTable */
		static public $dataClass = '\Bitrix\Iblock\PropertyTable';
	}
}
namespace Bitrix\Iblock {
	/**
	 * @method static EO_Property_Query query()
	 * @method static EO_Property_Result getByPrimary($primary, array $parameters = [])
	 * @method static EO_Property_Result getById($id)
	 * @method static EO_Property_Result getList(array $parameters = [])
	 * @method static EO_Property_Entity getEntity()
	 * @method static \Bitrix\Iblock\Property createObject($setDefaultValues = true)
	 * @method static \Bitrix\Iblock\EO_Property_Collection createCollection()
	 * @method static \Bitrix\Iblock\Property wakeUpObject($row)
	 * @method static \Bitrix\Iblock\EO_Property_Collection wakeUpCollection($rows)
	 */
	class PropertyTable extends \Bitrix\Main\ORM\Data\DataManager {}
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_Property_Result exec()
	 * @method \Bitrix\Iblock\Property fetchObject()
	 * @method \Bitrix\Iblock\EO_Property_Collection fetchCollection()
	 */
	class EO_Property_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Bitrix\Iblock\Property fetchObject()
	 * @method \Bitrix\Iblock\EO_Property_Collection fetchCollection()
	 */
	class EO_Property_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Bitrix\Iblock\Property createObject($setDefaultValues = true)
	 * @method \Bitrix\Iblock\EO_Property_Collection createCollection()
	 * @method \Bitrix\Iblock\Property wakeUpObject($row)
	 * @method \Bitrix\Iblock\EO_Property_Collection wakeUpCollection($rows)
	 */
	class EO_Property_Entity extends \Bitrix\Main\ORM\Entity {}
}
/* ORMENTITYANNOTATION:Bitrix\Iblock\Elements\ElementCatalogTable */
namespace Bitrix\Iblock\Elements {
	/**
	 * EO_ElementCatalog
	 * @see \Bitrix\Iblock\Elements\ElementCatalogTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getId()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setId(\int|\Bitrix\Main\DB\SqlExpression $id)
	 * @method bool hasId()
	 * @method bool isIdFilled()
	 * @method bool isIdChanged()
	 * @method \Bitrix\Main\Type\DateTime getTimestampX()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setTimestampX(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $timestampX)
	 * @method bool hasTimestampX()
	 * @method bool isTimestampXFilled()
	 * @method bool isTimestampXChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualTimestampX()
	 * @method \Bitrix\Main\Type\DateTime requireTimestampX()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetTimestampX()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetTimestampX()
	 * @method \Bitrix\Main\Type\DateTime fillTimestampX()
	 * @method \int getModifiedBy()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setModifiedBy(\int|\Bitrix\Main\DB\SqlExpression $modifiedBy)
	 * @method bool hasModifiedBy()
	 * @method bool isModifiedByFilled()
	 * @method bool isModifiedByChanged()
	 * @method \int remindActualModifiedBy()
	 * @method \int requireModifiedBy()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetModifiedBy()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetModifiedBy()
	 * @method \int fillModifiedBy()
	 * @method \Bitrix\Main\Type\DateTime getDateCreate()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setDateCreate(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $dateCreate)
	 * @method bool hasDateCreate()
	 * @method bool isDateCreateFilled()
	 * @method bool isDateCreateChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualDateCreate()
	 * @method \Bitrix\Main\Type\DateTime requireDateCreate()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetDateCreate()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetDateCreate()
	 * @method \Bitrix\Main\Type\DateTime fillDateCreate()
	 * @method \int getCreatedBy()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setCreatedBy(\int|\Bitrix\Main\DB\SqlExpression $createdBy)
	 * @method bool hasCreatedBy()
	 * @method bool isCreatedByFilled()
	 * @method bool isCreatedByChanged()
	 * @method \int remindActualCreatedBy()
	 * @method \int requireCreatedBy()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetCreatedBy()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetCreatedBy()
	 * @method \int fillCreatedBy()
	 * @method \int getIblockId()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setIblockId(\int|\Bitrix\Main\DB\SqlExpression $iblockId)
	 * @method bool hasIblockId()
	 * @method bool isIblockIdFilled()
	 * @method bool isIblockIdChanged()
	 * @method \int remindActualIblockId()
	 * @method \int requireIblockId()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetIblockId()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetIblockId()
	 * @method \int fillIblockId()
	 * @method \int getIblockSectionId()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setIblockSectionId(\int|\Bitrix\Main\DB\SqlExpression $iblockSectionId)
	 * @method bool hasIblockSectionId()
	 * @method bool isIblockSectionIdFilled()
	 * @method bool isIblockSectionIdChanged()
	 * @method \int remindActualIblockSectionId()
	 * @method \int requireIblockSectionId()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetIblockSectionId()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetIblockSectionId()
	 * @method \int fillIblockSectionId()
	 * @method \boolean getActive()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setActive(\boolean|\Bitrix\Main\DB\SqlExpression $active)
	 * @method bool hasActive()
	 * @method bool isActiveFilled()
	 * @method bool isActiveChanged()
	 * @method \boolean remindActualActive()
	 * @method \boolean requireActive()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetActive()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetActive()
	 * @method \boolean fillActive()
	 * @method \Bitrix\Main\Type\DateTime getActiveFrom()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setActiveFrom(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $activeFrom)
	 * @method bool hasActiveFrom()
	 * @method bool isActiveFromFilled()
	 * @method bool isActiveFromChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualActiveFrom()
	 * @method \Bitrix\Main\Type\DateTime requireActiveFrom()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetActiveFrom()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetActiveFrom()
	 * @method \Bitrix\Main\Type\DateTime fillActiveFrom()
	 * @method \Bitrix\Main\Type\DateTime getActiveTo()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setActiveTo(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $activeTo)
	 * @method bool hasActiveTo()
	 * @method bool isActiveToFilled()
	 * @method bool isActiveToChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualActiveTo()
	 * @method \Bitrix\Main\Type\DateTime requireActiveTo()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetActiveTo()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetActiveTo()
	 * @method \Bitrix\Main\Type\DateTime fillActiveTo()
	 * @method \int getSort()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setSort(\int|\Bitrix\Main\DB\SqlExpression $sort)
	 * @method bool hasSort()
	 * @method bool isSortFilled()
	 * @method bool isSortChanged()
	 * @method \int remindActualSort()
	 * @method \int requireSort()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetSort()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetSort()
	 * @method \int fillSort()
	 * @method \string getName()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setName(\string|\Bitrix\Main\DB\SqlExpression $name)
	 * @method bool hasName()
	 * @method bool isNameFilled()
	 * @method bool isNameChanged()
	 * @method \string remindActualName()
	 * @method \string requireName()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetName()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetName()
	 * @method \string fillName()
	 * @method \int getPreviewPicture()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setPreviewPicture(\int|\Bitrix\Main\DB\SqlExpression $previewPicture)
	 * @method bool hasPreviewPicture()
	 * @method bool isPreviewPictureFilled()
	 * @method bool isPreviewPictureChanged()
	 * @method \int remindActualPreviewPicture()
	 * @method \int requirePreviewPicture()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetPreviewPicture()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetPreviewPicture()
	 * @method \int fillPreviewPicture()
	 * @method \string getPreviewText()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setPreviewText(\string|\Bitrix\Main\DB\SqlExpression $previewText)
	 * @method bool hasPreviewText()
	 * @method bool isPreviewTextFilled()
	 * @method bool isPreviewTextChanged()
	 * @method \string remindActualPreviewText()
	 * @method \string requirePreviewText()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetPreviewText()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetPreviewText()
	 * @method \string fillPreviewText()
	 * @method \string getPreviewTextType()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setPreviewTextType(\string|\Bitrix\Main\DB\SqlExpression $previewTextType)
	 * @method bool hasPreviewTextType()
	 * @method bool isPreviewTextTypeFilled()
	 * @method bool isPreviewTextTypeChanged()
	 * @method \string remindActualPreviewTextType()
	 * @method \string requirePreviewTextType()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetPreviewTextType()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetPreviewTextType()
	 * @method \string fillPreviewTextType()
	 * @method \int getDetailPicture()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setDetailPicture(\int|\Bitrix\Main\DB\SqlExpression $detailPicture)
	 * @method bool hasDetailPicture()
	 * @method bool isDetailPictureFilled()
	 * @method bool isDetailPictureChanged()
	 * @method \int remindActualDetailPicture()
	 * @method \int requireDetailPicture()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetDetailPicture()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetDetailPicture()
	 * @method \int fillDetailPicture()
	 * @method \string getDetailText()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setDetailText(\string|\Bitrix\Main\DB\SqlExpression $detailText)
	 * @method bool hasDetailText()
	 * @method bool isDetailTextFilled()
	 * @method bool isDetailTextChanged()
	 * @method \string remindActualDetailText()
	 * @method \string requireDetailText()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetDetailText()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetDetailText()
	 * @method \string fillDetailText()
	 * @method \string getDetailTextType()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setDetailTextType(\string|\Bitrix\Main\DB\SqlExpression $detailTextType)
	 * @method bool hasDetailTextType()
	 * @method bool isDetailTextTypeFilled()
	 * @method bool isDetailTextTypeChanged()
	 * @method \string remindActualDetailTextType()
	 * @method \string requireDetailTextType()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetDetailTextType()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetDetailTextType()
	 * @method \string fillDetailTextType()
	 * @method \string getSearchableContent()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setSearchableContent(\string|\Bitrix\Main\DB\SqlExpression $searchableContent)
	 * @method bool hasSearchableContent()
	 * @method bool isSearchableContentFilled()
	 * @method bool isSearchableContentChanged()
	 * @method \string remindActualSearchableContent()
	 * @method \string requireSearchableContent()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetSearchableContent()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetSearchableContent()
	 * @method \string fillSearchableContent()
	 * @method \int getWfStatusId()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setWfStatusId(\int|\Bitrix\Main\DB\SqlExpression $wfStatusId)
	 * @method bool hasWfStatusId()
	 * @method bool isWfStatusIdFilled()
	 * @method bool isWfStatusIdChanged()
	 * @method \int remindActualWfStatusId()
	 * @method \int requireWfStatusId()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetWfStatusId()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetWfStatusId()
	 * @method \int fillWfStatusId()
	 * @method \int getWfParentElementId()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setWfParentElementId(\int|\Bitrix\Main\DB\SqlExpression $wfParentElementId)
	 * @method bool hasWfParentElementId()
	 * @method bool isWfParentElementIdFilled()
	 * @method bool isWfParentElementIdChanged()
	 * @method \int remindActualWfParentElementId()
	 * @method \int requireWfParentElementId()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetWfParentElementId()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetWfParentElementId()
	 * @method \int fillWfParentElementId()
	 * @method \string getWfNew()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setWfNew(\string|\Bitrix\Main\DB\SqlExpression $wfNew)
	 * @method bool hasWfNew()
	 * @method bool isWfNewFilled()
	 * @method bool isWfNewChanged()
	 * @method \string remindActualWfNew()
	 * @method \string requireWfNew()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetWfNew()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetWfNew()
	 * @method \string fillWfNew()
	 * @method \int getWfLockedBy()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setWfLockedBy(\int|\Bitrix\Main\DB\SqlExpression $wfLockedBy)
	 * @method bool hasWfLockedBy()
	 * @method bool isWfLockedByFilled()
	 * @method bool isWfLockedByChanged()
	 * @method \int remindActualWfLockedBy()
	 * @method \int requireWfLockedBy()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetWfLockedBy()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetWfLockedBy()
	 * @method \int fillWfLockedBy()
	 * @method \Bitrix\Main\Type\DateTime getWfDateLock()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setWfDateLock(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $wfDateLock)
	 * @method bool hasWfDateLock()
	 * @method bool isWfDateLockFilled()
	 * @method bool isWfDateLockChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualWfDateLock()
	 * @method \Bitrix\Main\Type\DateTime requireWfDateLock()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetWfDateLock()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetWfDateLock()
	 * @method \Bitrix\Main\Type\DateTime fillWfDateLock()
	 * @method \string getWfComments()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setWfComments(\string|\Bitrix\Main\DB\SqlExpression $wfComments)
	 * @method bool hasWfComments()
	 * @method bool isWfCommentsFilled()
	 * @method bool isWfCommentsChanged()
	 * @method \string remindActualWfComments()
	 * @method \string requireWfComments()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetWfComments()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetWfComments()
	 * @method \string fillWfComments()
	 * @method \boolean getInSections()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setInSections(\boolean|\Bitrix\Main\DB\SqlExpression $inSections)
	 * @method bool hasInSections()
	 * @method bool isInSectionsFilled()
	 * @method bool isInSectionsChanged()
	 * @method \boolean remindActualInSections()
	 * @method \boolean requireInSections()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetInSections()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetInSections()
	 * @method \boolean fillInSections()
	 * @method \string getXmlId()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setXmlId(\string|\Bitrix\Main\DB\SqlExpression $xmlId)
	 * @method bool hasXmlId()
	 * @method bool isXmlIdFilled()
	 * @method bool isXmlIdChanged()
	 * @method \string remindActualXmlId()
	 * @method \string requireXmlId()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetXmlId()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetXmlId()
	 * @method \string fillXmlId()
	 * @method \string getCode()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setCode(\string|\Bitrix\Main\DB\SqlExpression $code)
	 * @method bool hasCode()
	 * @method bool isCodeFilled()
	 * @method bool isCodeChanged()
	 * @method \string remindActualCode()
	 * @method \string requireCode()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetCode()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetCode()
	 * @method \string fillCode()
	 * @method \string getTags()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setTags(\string|\Bitrix\Main\DB\SqlExpression $tags)
	 * @method bool hasTags()
	 * @method bool isTagsFilled()
	 * @method bool isTagsChanged()
	 * @method \string remindActualTags()
	 * @method \string requireTags()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetTags()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetTags()
	 * @method \string fillTags()
	 * @method \string getTmpId()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setTmpId(\string|\Bitrix\Main\DB\SqlExpression $tmpId)
	 * @method bool hasTmpId()
	 * @method bool isTmpIdFilled()
	 * @method bool isTmpIdChanged()
	 * @method \string remindActualTmpId()
	 * @method \string requireTmpId()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetTmpId()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetTmpId()
	 * @method \string fillTmpId()
	 * @method \int getShowCounter()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setShowCounter(\int|\Bitrix\Main\DB\SqlExpression $showCounter)
	 * @method bool hasShowCounter()
	 * @method bool isShowCounterFilled()
	 * @method bool isShowCounterChanged()
	 * @method \int remindActualShowCounter()
	 * @method \int requireShowCounter()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetShowCounter()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetShowCounter()
	 * @method \int fillShowCounter()
	 * @method \Bitrix\Main\Type\DateTime getShowCounterStart()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setShowCounterStart(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $showCounterStart)
	 * @method bool hasShowCounterStart()
	 * @method bool isShowCounterStartFilled()
	 * @method bool isShowCounterStartChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualShowCounterStart()
	 * @method \Bitrix\Main\Type\DateTime requireShowCounterStart()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetShowCounterStart()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetShowCounterStart()
	 * @method \Bitrix\Main\Type\DateTime fillShowCounterStart()
	 * @method \Bitrix\Iblock\Iblock getIblock()
	 * @method \Bitrix\Iblock\Iblock remindActualIblock()
	 * @method \Bitrix\Iblock\Iblock requireIblock()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setIblock(\Bitrix\Iblock\Iblock $object)
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetIblock()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetIblock()
	 * @method bool hasIblock()
	 * @method bool isIblockFilled()
	 * @method bool isIblockChanged()
	 * @method \Bitrix\Iblock\Iblock fillIblock()
	 * @method \Bitrix\Iblock\EO_Element getWfParentElement()
	 * @method \Bitrix\Iblock\EO_Element remindActualWfParentElement()
	 * @method \Bitrix\Iblock\EO_Element requireWfParentElement()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setWfParentElement(\Bitrix\Iblock\EO_Element $object)
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetWfParentElement()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetWfParentElement()
	 * @method bool hasWfParentElement()
	 * @method bool isWfParentElementFilled()
	 * @method bool isWfParentElementChanged()
	 * @method \Bitrix\Iblock\EO_Element fillWfParentElement()
	 * @method \Bitrix\Iblock\EO_Section getIblockSection()
	 * @method \Bitrix\Iblock\EO_Section remindActualIblockSection()
	 * @method \Bitrix\Iblock\EO_Section requireIblockSection()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setIblockSection(\Bitrix\Iblock\EO_Section $object)
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetIblockSection()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetIblockSection()
	 * @method bool hasIblockSection()
	 * @method bool isIblockSectionFilled()
	 * @method bool isIblockSectionChanged()
	 * @method \Bitrix\Iblock\EO_Section fillIblockSection()
	 * @method \Bitrix\Main\EO_User getModifiedByUser()
	 * @method \Bitrix\Main\EO_User remindActualModifiedByUser()
	 * @method \Bitrix\Main\EO_User requireModifiedByUser()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setModifiedByUser(\Bitrix\Main\EO_User $object)
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetModifiedByUser()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetModifiedByUser()
	 * @method bool hasModifiedByUser()
	 * @method bool isModifiedByUserFilled()
	 * @method bool isModifiedByUserChanged()
	 * @method \Bitrix\Main\EO_User fillModifiedByUser()
	 * @method \Bitrix\Main\EO_User getCreatedByUser()
	 * @method \Bitrix\Main\EO_User remindActualCreatedByUser()
	 * @method \Bitrix\Main\EO_User requireCreatedByUser()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setCreatedByUser(\Bitrix\Main\EO_User $object)
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetCreatedByUser()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetCreatedByUser()
	 * @method bool hasCreatedByUser()
	 * @method bool isCreatedByUserFilled()
	 * @method bool isCreatedByUserChanged()
	 * @method \Bitrix\Main\EO_User fillCreatedByUser()
	 * @method \Bitrix\Main\EO_User getWfLockedByUser()
	 * @method \Bitrix\Main\EO_User remindActualWfLockedByUser()
	 * @method \Bitrix\Main\EO_User requireWfLockedByUser()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setWfLockedByUser(\Bitrix\Main\EO_User $object)
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetWfLockedByUser()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetWfLockedByUser()
	 * @method bool hasWfLockedByUser()
	 * @method bool isWfLockedByUserFilled()
	 * @method bool isWfLockedByUserChanged()
	 * @method \Bitrix\Main\EO_User fillWfLockedByUser()
	 * @method \Bitrix\Iblock\EO_Section_Collection getSections()
	 * @method \Bitrix\Iblock\EO_Section_Collection requireSections()
	 * @method \Bitrix\Iblock\EO_Section_Collection fillSections()
	 * @method bool hasSections()
	 * @method bool isSectionsFilled()
	 * @method bool isSectionsChanged()
	 * @method void addToSections(\Bitrix\Iblock\EO_Section $section)
	 * @method void removeFromSections(\Bitrix\Iblock\EO_Section $section)
	 * @method void removeAllSections()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetSections()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetSections()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61_Collection getMorePhoto()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61_Collection requireMorePhoto()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61_Collection fillMorePhoto()
	 * @method bool hasMorePhoto()
	 * @method bool isMorePhotoFilled()
	 * @method bool isMorePhotoChanged()
	 * @method void addToMorePhoto(\Bitrix\Iblock\Elements\EO_IblockProperty61|\Bitrix\Iblock\ORM\PropertyValue|\int $iblockProperty61)
	 * @method void removeFromMorePhoto(\Bitrix\Iblock\Elements\EO_IblockProperty61|\Bitrix\Iblock\ORM\PropertyValue|\int $iblockProperty61)
	 * @method void removeAllMorePhoto()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetMorePhoto()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetMorePhoto()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64_Collection getTest()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64_Collection requireTest()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64_Collection fillTest()
	 * @method bool hasTest()
	 * @method bool isTestFilled()
	 * @method bool isTestChanged()
	 * @method void addToTest(\Bitrix\Iblock\Elements\EO_IblockProperty64|\Bitrix\Iblock\ORM\PropertyValue|\string $iblockProperty64)
	 * @method void removeFromTest(\Bitrix\Iblock\Elements\EO_IblockProperty64|\Bitrix\Iblock\ORM\PropertyValue|\string $iblockProperty64)
	 * @method void removeAllTest()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetTest()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetTest()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65 getTmpString()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65 remindActualTmpString()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65 requireTmpString()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setTmpString(\Bitrix\Iblock\Elements\EO_IblockProperty65|\Bitrix\Iblock\ORM\PropertyValue|\string $object)
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetTmpString()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetTmpString()
	 * @method bool hasTmpString()
	 * @method bool isTmpStringFilled()
	 * @method bool isTmpStringChanged()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65 fillTmpString()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66 getTmpNumber()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66 remindActualTmpNumber()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66 requireTmpNumber()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setTmpNumber(\Bitrix\Iblock\Elements\EO_IblockProperty66|\Bitrix\Iblock\ORM\PropertyValue|\float $object)
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetTmpNumber()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetTmpNumber()
	 * @method bool hasTmpNumber()
	 * @method bool isTmpNumberFilled()
	 * @method bool isTmpNumberChanged()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66 fillTmpNumber()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 getTmpList()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 remindActualTmpList()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 requireTmpList()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog setTmpList(\Bitrix\Iblock\Elements\EO_IblockProperty67|\Bitrix\Iblock\ORM\PropertyValue|\int $object)
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetTmpList()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetTmpList()
	 * @method bool hasTmpList()
	 * @method bool isTmpListFilled()
	 * @method bool isTmpListChanged()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 fillTmpList()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68_Collection getTmpListMulti()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68_Collection requireTmpListMulti()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68_Collection fillTmpListMulti()
	 * @method bool hasTmpListMulti()
	 * @method bool isTmpListMultiFilled()
	 * @method bool isTmpListMultiChanged()
	 * @method void addToTmpListMulti(\Bitrix\Iblock\Elements\EO_IblockProperty68|\Bitrix\Iblock\ORM\PropertyValue|\int $iblockProperty68)
	 * @method void removeFromTmpListMulti(\Bitrix\Iblock\Elements\EO_IblockProperty68|\Bitrix\Iblock\ORM\PropertyValue|\int $iblockProperty68)
	 * @method void removeAllTmpListMulti()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog resetTmpListMulti()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unsetTmpListMulti()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog set($fieldName, $value)
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog reset($fieldName)
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method mixed fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Bitrix\Iblock\Elements\EO_ElementCatalog wakeUp($data)
	 */
	class EO_ElementCatalog extends \Bitrix\Main\ORM\Objectify\EntityObject {
		/* @var \Bitrix\Iblock\Elements\ElementCatalogTable */
		static public $dataClass = '\Bitrix\Iblock\Elements\ElementCatalogTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Iblock\Elements {
	/**
	 * EO_ElementCatalog_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getIdList()
	 * @method \Bitrix\Main\Type\DateTime[] getTimestampXList()
	 * @method \Bitrix\Main\Type\DateTime[] fillTimestampX()
	 * @method \int[] getModifiedByList()
	 * @method \int[] fillModifiedBy()
	 * @method \Bitrix\Main\Type\DateTime[] getDateCreateList()
	 * @method \Bitrix\Main\Type\DateTime[] fillDateCreate()
	 * @method \int[] getCreatedByList()
	 * @method \int[] fillCreatedBy()
	 * @method \int[] getIblockIdList()
	 * @method \int[] fillIblockId()
	 * @method \int[] getIblockSectionIdList()
	 * @method \int[] fillIblockSectionId()
	 * @method \boolean[] getActiveList()
	 * @method \boolean[] fillActive()
	 * @method \Bitrix\Main\Type\DateTime[] getActiveFromList()
	 * @method \Bitrix\Main\Type\DateTime[] fillActiveFrom()
	 * @method \Bitrix\Main\Type\DateTime[] getActiveToList()
	 * @method \Bitrix\Main\Type\DateTime[] fillActiveTo()
	 * @method \int[] getSortList()
	 * @method \int[] fillSort()
	 * @method \string[] getNameList()
	 * @method \string[] fillName()
	 * @method \int[] getPreviewPictureList()
	 * @method \int[] fillPreviewPicture()
	 * @method \string[] getPreviewTextList()
	 * @method \string[] fillPreviewText()
	 * @method \string[] getPreviewTextTypeList()
	 * @method \string[] fillPreviewTextType()
	 * @method \int[] getDetailPictureList()
	 * @method \int[] fillDetailPicture()
	 * @method \string[] getDetailTextList()
	 * @method \string[] fillDetailText()
	 * @method \string[] getDetailTextTypeList()
	 * @method \string[] fillDetailTextType()
	 * @method \string[] getSearchableContentList()
	 * @method \string[] fillSearchableContent()
	 * @method \int[] getWfStatusIdList()
	 * @method \int[] fillWfStatusId()
	 * @method \int[] getWfParentElementIdList()
	 * @method \int[] fillWfParentElementId()
	 * @method \string[] getWfNewList()
	 * @method \string[] fillWfNew()
	 * @method \int[] getWfLockedByList()
	 * @method \int[] fillWfLockedBy()
	 * @method \Bitrix\Main\Type\DateTime[] getWfDateLockList()
	 * @method \Bitrix\Main\Type\DateTime[] fillWfDateLock()
	 * @method \string[] getWfCommentsList()
	 * @method \string[] fillWfComments()
	 * @method \boolean[] getInSectionsList()
	 * @method \boolean[] fillInSections()
	 * @method \string[] getXmlIdList()
	 * @method \string[] fillXmlId()
	 * @method \string[] getCodeList()
	 * @method \string[] fillCode()
	 * @method \string[] getTagsList()
	 * @method \string[] fillTags()
	 * @method \string[] getTmpIdList()
	 * @method \string[] fillTmpId()
	 * @method \int[] getShowCounterList()
	 * @method \int[] fillShowCounter()
	 * @method \Bitrix\Main\Type\DateTime[] getShowCounterStartList()
	 * @method \Bitrix\Main\Type\DateTime[] fillShowCounterStart()
	 * @method \Bitrix\Iblock\Iblock[] getIblockList()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog_Collection getIblockCollection()
	 * @method \Bitrix\Iblock\EO_Iblock_Collection fillIblock()
	 * @method \Bitrix\Iblock\EO_Element[] getWfParentElementList()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog_Collection getWfParentElementCollection()
	 * @method \Bitrix\Iblock\EO_Element_Collection fillWfParentElement()
	 * @method \Bitrix\Iblock\EO_Section[] getIblockSectionList()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog_Collection getIblockSectionCollection()
	 * @method \Bitrix\Iblock\EO_Section_Collection fillIblockSection()
	 * @method \Bitrix\Main\EO_User[] getModifiedByUserList()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog_Collection getModifiedByUserCollection()
	 * @method \Bitrix\Main\EO_User_Collection fillModifiedByUser()
	 * @method \Bitrix\Main\EO_User[] getCreatedByUserList()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog_Collection getCreatedByUserCollection()
	 * @method \Bitrix\Main\EO_User_Collection fillCreatedByUser()
	 * @method \Bitrix\Main\EO_User[] getWfLockedByUserList()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog_Collection getWfLockedByUserCollection()
	 * @method \Bitrix\Main\EO_User_Collection fillWfLockedByUser()
	 * @method \Bitrix\Iblock\EO_Section_Collection[] getSectionsList()
	 * @method \Bitrix\Iblock\EO_Section_Collection getSectionsCollection()
	 * @method \Bitrix\Iblock\EO_Section_Collection fillSections()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61_Collection[] getMorePhotoList()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61_Collection getMorePhotoCollection()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61_Collection fillMorePhoto()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64_Collection[] getTestList()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64_Collection getTestCollection()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64_Collection fillTest()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65[] getTmpStringList()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog_Collection getTmpStringCollection()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65_Collection fillTmpString()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66[] getTmpNumberList()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog_Collection getTmpNumberCollection()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66_Collection fillTmpNumber()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67[] getTmpListList()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog_Collection getTmpListCollection()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67_Collection fillTmpList()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68_Collection[] getTmpListMultiList()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68_Collection getTmpListMultiCollection()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68_Collection fillTmpListMulti()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Bitrix\Iblock\Elements\EO_ElementCatalog $object)
	 * @method bool has(\Bitrix\Iblock\Elements\EO_ElementCatalog $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog getByPrimary($primary)
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog[] getAll()
	 * @method bool remove(\Bitrix\Iblock\Elements\EO_ElementCatalog $object)
	 * @method void removeByPrimary($primary)
	 * @method array|\Bitrix\Main\ORM\Objectify\Collection|null fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Bitrix\Iblock\Elements\EO_ElementCatalog_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog_Collection merge(?\Bitrix\Iblock\Elements\EO_ElementCatalog_Collection $collection)
	 * @method bool isEmpty()
	 * @method array collectValues(int $valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, int $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL, bool $recursive = false)
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog|null find(callable $callback)
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog_Collection filter(callable $callback)
	 */
	class EO_ElementCatalog_Collection extends \Bitrix\Main\ORM\Objectify\Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Iblock\Elements\ElementCatalogTable */
		static public $dataClass = '\Bitrix\Iblock\Elements\ElementCatalogTable';
	}
}
namespace Bitrix\Iblock\Elements {
	/**
	 * @method static \Bitrix\Iblock\ORM\Query query()
	 * @method static EO_ElementCatalog_Result getByPrimary($primary, array $parameters = [])
	 * @method static EO_ElementCatalog_Result getById($id)
	 * @method static EO_ElementCatalog_Result getList(array $parameters = [])
	 * @method static EO_ElementCatalog_Entity getEntity()
	 * @method static \Bitrix\Iblock\Elements\EO_ElementCatalog createObject($setDefaultValues = true)
	 * @method static \Bitrix\Iblock\Elements\EO_ElementCatalog_Collection createCollection()
	 * @method static \Bitrix\Iblock\Elements\EO_ElementCatalog wakeUpObject($row)
	 * @method static \Bitrix\Iblock\Elements\EO_ElementCatalog_Collection wakeUpCollection($rows)
	 */
	class ElementCatalogTable extends \Bitrix\Main\ORM\Data\DataManager {}
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_ElementCatalog_Result exec()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog fetchObject()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog_Collection fetchCollection()
	 */
	class EO_ElementCatalog_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog fetchObject()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog_Collection fetchCollection()
	 */
	class EO_ElementCatalog_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog createObject($setDefaultValues = true)
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog_Collection createCollection()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog wakeUpObject($row)
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog_Collection wakeUpCollection($rows)
	 */
	class EO_ElementCatalog_Entity extends \Bitrix\Main\ORM\Entity {}
}
/* ORMENTITYANNOTATION:Bitrix\Iblock\ORM\ElementV1Table */
namespace Bitrix\Iblock\ORM {
	/**
	 * EO_ElementV1
	 * @see \Bitrix\Iblock\ORM\ElementV1Table
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getId()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setId(\int|\Bitrix\Main\DB\SqlExpression $id)
	 * @method bool hasId()
	 * @method bool isIdFilled()
	 * @method bool isIdChanged()
	 * @method \Bitrix\Main\Type\DateTime getTimestampX()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setTimestampX(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $timestampX)
	 * @method bool hasTimestampX()
	 * @method bool isTimestampXFilled()
	 * @method bool isTimestampXChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualTimestampX()
	 * @method \Bitrix\Main\Type\DateTime requireTimestampX()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetTimestampX()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetTimestampX()
	 * @method \Bitrix\Main\Type\DateTime fillTimestampX()
	 * @method \int getModifiedBy()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setModifiedBy(\int|\Bitrix\Main\DB\SqlExpression $modifiedBy)
	 * @method bool hasModifiedBy()
	 * @method bool isModifiedByFilled()
	 * @method bool isModifiedByChanged()
	 * @method \int remindActualModifiedBy()
	 * @method \int requireModifiedBy()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetModifiedBy()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetModifiedBy()
	 * @method \int fillModifiedBy()
	 * @method \Bitrix\Main\Type\DateTime getDateCreate()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setDateCreate(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $dateCreate)
	 * @method bool hasDateCreate()
	 * @method bool isDateCreateFilled()
	 * @method bool isDateCreateChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualDateCreate()
	 * @method \Bitrix\Main\Type\DateTime requireDateCreate()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetDateCreate()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetDateCreate()
	 * @method \Bitrix\Main\Type\DateTime fillDateCreate()
	 * @method \int getCreatedBy()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setCreatedBy(\int|\Bitrix\Main\DB\SqlExpression $createdBy)
	 * @method bool hasCreatedBy()
	 * @method bool isCreatedByFilled()
	 * @method bool isCreatedByChanged()
	 * @method \int remindActualCreatedBy()
	 * @method \int requireCreatedBy()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetCreatedBy()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetCreatedBy()
	 * @method \int fillCreatedBy()
	 * @method \int getIblockId()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setIblockId(\int|\Bitrix\Main\DB\SqlExpression $iblockId)
	 * @method bool hasIblockId()
	 * @method bool isIblockIdFilled()
	 * @method bool isIblockIdChanged()
	 * @method \int remindActualIblockId()
	 * @method \int requireIblockId()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetIblockId()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetIblockId()
	 * @method \int fillIblockId()
	 * @method \int getIblockSectionId()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setIblockSectionId(\int|\Bitrix\Main\DB\SqlExpression $iblockSectionId)
	 * @method bool hasIblockSectionId()
	 * @method bool isIblockSectionIdFilled()
	 * @method bool isIblockSectionIdChanged()
	 * @method \int remindActualIblockSectionId()
	 * @method \int requireIblockSectionId()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetIblockSectionId()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetIblockSectionId()
	 * @method \int fillIblockSectionId()
	 * @method \boolean getActive()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setActive(\boolean|\Bitrix\Main\DB\SqlExpression $active)
	 * @method bool hasActive()
	 * @method bool isActiveFilled()
	 * @method bool isActiveChanged()
	 * @method \boolean remindActualActive()
	 * @method \boolean requireActive()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetActive()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetActive()
	 * @method \boolean fillActive()
	 * @method \Bitrix\Main\Type\DateTime getActiveFrom()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setActiveFrom(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $activeFrom)
	 * @method bool hasActiveFrom()
	 * @method bool isActiveFromFilled()
	 * @method bool isActiveFromChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualActiveFrom()
	 * @method \Bitrix\Main\Type\DateTime requireActiveFrom()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetActiveFrom()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetActiveFrom()
	 * @method \Bitrix\Main\Type\DateTime fillActiveFrom()
	 * @method \Bitrix\Main\Type\DateTime getActiveTo()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setActiveTo(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $activeTo)
	 * @method bool hasActiveTo()
	 * @method bool isActiveToFilled()
	 * @method bool isActiveToChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualActiveTo()
	 * @method \Bitrix\Main\Type\DateTime requireActiveTo()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetActiveTo()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetActiveTo()
	 * @method \Bitrix\Main\Type\DateTime fillActiveTo()
	 * @method \int getSort()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setSort(\int|\Bitrix\Main\DB\SqlExpression $sort)
	 * @method bool hasSort()
	 * @method bool isSortFilled()
	 * @method bool isSortChanged()
	 * @method \int remindActualSort()
	 * @method \int requireSort()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetSort()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetSort()
	 * @method \int fillSort()
	 * @method \string getName()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setName(\string|\Bitrix\Main\DB\SqlExpression $name)
	 * @method bool hasName()
	 * @method bool isNameFilled()
	 * @method bool isNameChanged()
	 * @method \string remindActualName()
	 * @method \string requireName()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetName()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetName()
	 * @method \string fillName()
	 * @method \int getPreviewPicture()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setPreviewPicture(\int|\Bitrix\Main\DB\SqlExpression $previewPicture)
	 * @method bool hasPreviewPicture()
	 * @method bool isPreviewPictureFilled()
	 * @method bool isPreviewPictureChanged()
	 * @method \int remindActualPreviewPicture()
	 * @method \int requirePreviewPicture()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetPreviewPicture()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetPreviewPicture()
	 * @method \int fillPreviewPicture()
	 * @method \string getPreviewText()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setPreviewText(\string|\Bitrix\Main\DB\SqlExpression $previewText)
	 * @method bool hasPreviewText()
	 * @method bool isPreviewTextFilled()
	 * @method bool isPreviewTextChanged()
	 * @method \string remindActualPreviewText()
	 * @method \string requirePreviewText()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetPreviewText()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetPreviewText()
	 * @method \string fillPreviewText()
	 * @method \string getPreviewTextType()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setPreviewTextType(\string|\Bitrix\Main\DB\SqlExpression $previewTextType)
	 * @method bool hasPreviewTextType()
	 * @method bool isPreviewTextTypeFilled()
	 * @method bool isPreviewTextTypeChanged()
	 * @method \string remindActualPreviewTextType()
	 * @method \string requirePreviewTextType()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetPreviewTextType()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetPreviewTextType()
	 * @method \string fillPreviewTextType()
	 * @method \int getDetailPicture()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setDetailPicture(\int|\Bitrix\Main\DB\SqlExpression $detailPicture)
	 * @method bool hasDetailPicture()
	 * @method bool isDetailPictureFilled()
	 * @method bool isDetailPictureChanged()
	 * @method \int remindActualDetailPicture()
	 * @method \int requireDetailPicture()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetDetailPicture()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetDetailPicture()
	 * @method \int fillDetailPicture()
	 * @method \string getDetailText()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setDetailText(\string|\Bitrix\Main\DB\SqlExpression $detailText)
	 * @method bool hasDetailText()
	 * @method bool isDetailTextFilled()
	 * @method bool isDetailTextChanged()
	 * @method \string remindActualDetailText()
	 * @method \string requireDetailText()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetDetailText()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetDetailText()
	 * @method \string fillDetailText()
	 * @method \string getDetailTextType()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setDetailTextType(\string|\Bitrix\Main\DB\SqlExpression $detailTextType)
	 * @method bool hasDetailTextType()
	 * @method bool isDetailTextTypeFilled()
	 * @method bool isDetailTextTypeChanged()
	 * @method \string remindActualDetailTextType()
	 * @method \string requireDetailTextType()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetDetailTextType()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetDetailTextType()
	 * @method \string fillDetailTextType()
	 * @method \string getSearchableContent()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setSearchableContent(\string|\Bitrix\Main\DB\SqlExpression $searchableContent)
	 * @method bool hasSearchableContent()
	 * @method bool isSearchableContentFilled()
	 * @method bool isSearchableContentChanged()
	 * @method \string remindActualSearchableContent()
	 * @method \string requireSearchableContent()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetSearchableContent()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetSearchableContent()
	 * @method \string fillSearchableContent()
	 * @method \int getWfStatusId()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setWfStatusId(\int|\Bitrix\Main\DB\SqlExpression $wfStatusId)
	 * @method bool hasWfStatusId()
	 * @method bool isWfStatusIdFilled()
	 * @method bool isWfStatusIdChanged()
	 * @method \int remindActualWfStatusId()
	 * @method \int requireWfStatusId()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetWfStatusId()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetWfStatusId()
	 * @method \int fillWfStatusId()
	 * @method \int getWfParentElementId()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setWfParentElementId(\int|\Bitrix\Main\DB\SqlExpression $wfParentElementId)
	 * @method bool hasWfParentElementId()
	 * @method bool isWfParentElementIdFilled()
	 * @method bool isWfParentElementIdChanged()
	 * @method \int remindActualWfParentElementId()
	 * @method \int requireWfParentElementId()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetWfParentElementId()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetWfParentElementId()
	 * @method \int fillWfParentElementId()
	 * @method \string getWfNew()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setWfNew(\string|\Bitrix\Main\DB\SqlExpression $wfNew)
	 * @method bool hasWfNew()
	 * @method bool isWfNewFilled()
	 * @method bool isWfNewChanged()
	 * @method \string remindActualWfNew()
	 * @method \string requireWfNew()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetWfNew()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetWfNew()
	 * @method \string fillWfNew()
	 * @method \int getWfLockedBy()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setWfLockedBy(\int|\Bitrix\Main\DB\SqlExpression $wfLockedBy)
	 * @method bool hasWfLockedBy()
	 * @method bool isWfLockedByFilled()
	 * @method bool isWfLockedByChanged()
	 * @method \int remindActualWfLockedBy()
	 * @method \int requireWfLockedBy()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetWfLockedBy()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetWfLockedBy()
	 * @method \int fillWfLockedBy()
	 * @method \Bitrix\Main\Type\DateTime getWfDateLock()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setWfDateLock(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $wfDateLock)
	 * @method bool hasWfDateLock()
	 * @method bool isWfDateLockFilled()
	 * @method bool isWfDateLockChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualWfDateLock()
	 * @method \Bitrix\Main\Type\DateTime requireWfDateLock()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetWfDateLock()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetWfDateLock()
	 * @method \Bitrix\Main\Type\DateTime fillWfDateLock()
	 * @method \string getWfComments()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setWfComments(\string|\Bitrix\Main\DB\SqlExpression $wfComments)
	 * @method bool hasWfComments()
	 * @method bool isWfCommentsFilled()
	 * @method bool isWfCommentsChanged()
	 * @method \string remindActualWfComments()
	 * @method \string requireWfComments()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetWfComments()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetWfComments()
	 * @method \string fillWfComments()
	 * @method \boolean getInSections()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setInSections(\boolean|\Bitrix\Main\DB\SqlExpression $inSections)
	 * @method bool hasInSections()
	 * @method bool isInSectionsFilled()
	 * @method bool isInSectionsChanged()
	 * @method \boolean remindActualInSections()
	 * @method \boolean requireInSections()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetInSections()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetInSections()
	 * @method \boolean fillInSections()
	 * @method \string getXmlId()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setXmlId(\string|\Bitrix\Main\DB\SqlExpression $xmlId)
	 * @method bool hasXmlId()
	 * @method bool isXmlIdFilled()
	 * @method bool isXmlIdChanged()
	 * @method \string remindActualXmlId()
	 * @method \string requireXmlId()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetXmlId()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetXmlId()
	 * @method \string fillXmlId()
	 * @method \string getCode()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setCode(\string|\Bitrix\Main\DB\SqlExpression $code)
	 * @method bool hasCode()
	 * @method bool isCodeFilled()
	 * @method bool isCodeChanged()
	 * @method \string remindActualCode()
	 * @method \string requireCode()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetCode()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetCode()
	 * @method \string fillCode()
	 * @method \string getTags()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setTags(\string|\Bitrix\Main\DB\SqlExpression $tags)
	 * @method bool hasTags()
	 * @method bool isTagsFilled()
	 * @method bool isTagsChanged()
	 * @method \string remindActualTags()
	 * @method \string requireTags()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetTags()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetTags()
	 * @method \string fillTags()
	 * @method \string getTmpId()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setTmpId(\string|\Bitrix\Main\DB\SqlExpression $tmpId)
	 * @method bool hasTmpId()
	 * @method bool isTmpIdFilled()
	 * @method bool isTmpIdChanged()
	 * @method \string remindActualTmpId()
	 * @method \string requireTmpId()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetTmpId()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetTmpId()
	 * @method \string fillTmpId()
	 * @method \int getShowCounter()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setShowCounter(\int|\Bitrix\Main\DB\SqlExpression $showCounter)
	 * @method bool hasShowCounter()
	 * @method bool isShowCounterFilled()
	 * @method bool isShowCounterChanged()
	 * @method \int remindActualShowCounter()
	 * @method \int requireShowCounter()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetShowCounter()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetShowCounter()
	 * @method \int fillShowCounter()
	 * @method \Bitrix\Main\Type\DateTime getShowCounterStart()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setShowCounterStart(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $showCounterStart)
	 * @method bool hasShowCounterStart()
	 * @method bool isShowCounterStartFilled()
	 * @method bool isShowCounterStartChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualShowCounterStart()
	 * @method \Bitrix\Main\Type\DateTime requireShowCounterStart()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetShowCounterStart()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetShowCounterStart()
	 * @method \Bitrix\Main\Type\DateTime fillShowCounterStart()
	 * @method \Bitrix\Iblock\Iblock getIblock()
	 * @method \Bitrix\Iblock\Iblock remindActualIblock()
	 * @method \Bitrix\Iblock\Iblock requireIblock()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setIblock(\Bitrix\Iblock\Iblock $object)
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetIblock()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetIblock()
	 * @method bool hasIblock()
	 * @method bool isIblockFilled()
	 * @method bool isIblockChanged()
	 * @method \Bitrix\Iblock\Iblock fillIblock()
	 * @method \Bitrix\Iblock\EO_Element getWfParentElement()
	 * @method \Bitrix\Iblock\EO_Element remindActualWfParentElement()
	 * @method \Bitrix\Iblock\EO_Element requireWfParentElement()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setWfParentElement(\Bitrix\Iblock\EO_Element $object)
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetWfParentElement()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetWfParentElement()
	 * @method bool hasWfParentElement()
	 * @method bool isWfParentElementFilled()
	 * @method bool isWfParentElementChanged()
	 * @method \Bitrix\Iblock\EO_Element fillWfParentElement()
	 * @method \Bitrix\Iblock\EO_Section getIblockSection()
	 * @method \Bitrix\Iblock\EO_Section remindActualIblockSection()
	 * @method \Bitrix\Iblock\EO_Section requireIblockSection()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setIblockSection(\Bitrix\Iblock\EO_Section $object)
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetIblockSection()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetIblockSection()
	 * @method bool hasIblockSection()
	 * @method bool isIblockSectionFilled()
	 * @method bool isIblockSectionChanged()
	 * @method \Bitrix\Iblock\EO_Section fillIblockSection()
	 * @method \Bitrix\Main\EO_User getModifiedByUser()
	 * @method \Bitrix\Main\EO_User remindActualModifiedByUser()
	 * @method \Bitrix\Main\EO_User requireModifiedByUser()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setModifiedByUser(\Bitrix\Main\EO_User $object)
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetModifiedByUser()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetModifiedByUser()
	 * @method bool hasModifiedByUser()
	 * @method bool isModifiedByUserFilled()
	 * @method bool isModifiedByUserChanged()
	 * @method \Bitrix\Main\EO_User fillModifiedByUser()
	 * @method \Bitrix\Main\EO_User getCreatedByUser()
	 * @method \Bitrix\Main\EO_User remindActualCreatedByUser()
	 * @method \Bitrix\Main\EO_User requireCreatedByUser()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setCreatedByUser(\Bitrix\Main\EO_User $object)
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetCreatedByUser()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetCreatedByUser()
	 * @method bool hasCreatedByUser()
	 * @method bool isCreatedByUserFilled()
	 * @method bool isCreatedByUserChanged()
	 * @method \Bitrix\Main\EO_User fillCreatedByUser()
	 * @method \Bitrix\Main\EO_User getWfLockedByUser()
	 * @method \Bitrix\Main\EO_User remindActualWfLockedByUser()
	 * @method \Bitrix\Main\EO_User requireWfLockedByUser()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 setWfLockedByUser(\Bitrix\Main\EO_User $object)
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 resetWfLockedByUser()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unsetWfLockedByUser()
	 * @method bool hasWfLockedByUser()
	 * @method bool isWfLockedByUserFilled()
	 * @method bool isWfLockedByUserChanged()
	 * @method \Bitrix\Main\EO_User fillWfLockedByUser()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 set($fieldName, $value)
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 reset($fieldName)
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method mixed fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Bitrix\Iblock\ORM\EO_ElementV1 wakeUp($data)
	 */
	class EO_ElementV1 extends \Bitrix\Main\ORM\Objectify\EntityObject {
		/* @var \Bitrix\Iblock\ORM\ElementV1Table */
		static public $dataClass = '\Bitrix\Iblock\ORM\ElementV1Table';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Iblock\ORM {
	/**
	 * EO_ElementV1_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getIdList()
	 * @method \Bitrix\Main\Type\DateTime[] getTimestampXList()
	 * @method \Bitrix\Main\Type\DateTime[] fillTimestampX()
	 * @method \int[] getModifiedByList()
	 * @method \int[] fillModifiedBy()
	 * @method \Bitrix\Main\Type\DateTime[] getDateCreateList()
	 * @method \Bitrix\Main\Type\DateTime[] fillDateCreate()
	 * @method \int[] getCreatedByList()
	 * @method \int[] fillCreatedBy()
	 * @method \int[] getIblockIdList()
	 * @method \int[] fillIblockId()
	 * @method \int[] getIblockSectionIdList()
	 * @method \int[] fillIblockSectionId()
	 * @method \boolean[] getActiveList()
	 * @method \boolean[] fillActive()
	 * @method \Bitrix\Main\Type\DateTime[] getActiveFromList()
	 * @method \Bitrix\Main\Type\DateTime[] fillActiveFrom()
	 * @method \Bitrix\Main\Type\DateTime[] getActiveToList()
	 * @method \Bitrix\Main\Type\DateTime[] fillActiveTo()
	 * @method \int[] getSortList()
	 * @method \int[] fillSort()
	 * @method \string[] getNameList()
	 * @method \string[] fillName()
	 * @method \int[] getPreviewPictureList()
	 * @method \int[] fillPreviewPicture()
	 * @method \string[] getPreviewTextList()
	 * @method \string[] fillPreviewText()
	 * @method \string[] getPreviewTextTypeList()
	 * @method \string[] fillPreviewTextType()
	 * @method \int[] getDetailPictureList()
	 * @method \int[] fillDetailPicture()
	 * @method \string[] getDetailTextList()
	 * @method \string[] fillDetailText()
	 * @method \string[] getDetailTextTypeList()
	 * @method \string[] fillDetailTextType()
	 * @method \string[] getSearchableContentList()
	 * @method \string[] fillSearchableContent()
	 * @method \int[] getWfStatusIdList()
	 * @method \int[] fillWfStatusId()
	 * @method \int[] getWfParentElementIdList()
	 * @method \int[] fillWfParentElementId()
	 * @method \string[] getWfNewList()
	 * @method \string[] fillWfNew()
	 * @method \int[] getWfLockedByList()
	 * @method \int[] fillWfLockedBy()
	 * @method \Bitrix\Main\Type\DateTime[] getWfDateLockList()
	 * @method \Bitrix\Main\Type\DateTime[] fillWfDateLock()
	 * @method \string[] getWfCommentsList()
	 * @method \string[] fillWfComments()
	 * @method \boolean[] getInSectionsList()
	 * @method \boolean[] fillInSections()
	 * @method \string[] getXmlIdList()
	 * @method \string[] fillXmlId()
	 * @method \string[] getCodeList()
	 * @method \string[] fillCode()
	 * @method \string[] getTagsList()
	 * @method \string[] fillTags()
	 * @method \string[] getTmpIdList()
	 * @method \string[] fillTmpId()
	 * @method \int[] getShowCounterList()
	 * @method \int[] fillShowCounter()
	 * @method \Bitrix\Main\Type\DateTime[] getShowCounterStartList()
	 * @method \Bitrix\Main\Type\DateTime[] fillShowCounterStart()
	 * @method \Bitrix\Iblock\Iblock[] getIblockList()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1_Collection getIblockCollection()
	 * @method \Bitrix\Iblock\EO_Iblock_Collection fillIblock()
	 * @method \Bitrix\Iblock\EO_Element[] getWfParentElementList()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1_Collection getWfParentElementCollection()
	 * @method \Bitrix\Iblock\EO_Element_Collection fillWfParentElement()
	 * @method \Bitrix\Iblock\EO_Section[] getIblockSectionList()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1_Collection getIblockSectionCollection()
	 * @method \Bitrix\Iblock\EO_Section_Collection fillIblockSection()
	 * @method \Bitrix\Main\EO_User[] getModifiedByUserList()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1_Collection getModifiedByUserCollection()
	 * @method \Bitrix\Main\EO_User_Collection fillModifiedByUser()
	 * @method \Bitrix\Main\EO_User[] getCreatedByUserList()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1_Collection getCreatedByUserCollection()
	 * @method \Bitrix\Main\EO_User_Collection fillCreatedByUser()
	 * @method \Bitrix\Main\EO_User[] getWfLockedByUserList()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1_Collection getWfLockedByUserCollection()
	 * @method \Bitrix\Main\EO_User_Collection fillWfLockedByUser()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Bitrix\Iblock\ORM\EO_ElementV1 $object)
	 * @method bool has(\Bitrix\Iblock\ORM\EO_ElementV1 $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 getByPrimary($primary)
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1[] getAll()
	 * @method bool remove(\Bitrix\Iblock\ORM\EO_ElementV1 $object)
	 * @method void removeByPrimary($primary)
	 * @method array|\Bitrix\Main\ORM\Objectify\Collection|null fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Bitrix\Iblock\ORM\EO_ElementV1_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1_Collection merge(?\Bitrix\Iblock\ORM\EO_ElementV1_Collection $collection)
	 * @method bool isEmpty()
	 * @method array collectValues(int $valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, int $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL, bool $recursive = false)
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1|null find(callable $callback)
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1_Collection filter(callable $callback)
	 */
	class EO_ElementV1_Collection extends \Bitrix\Main\ORM\Objectify\Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Iblock\ORM\ElementV1Table */
		static public $dataClass = '\Bitrix\Iblock\ORM\ElementV1Table';
	}
}
namespace Bitrix\Iblock\ORM {
	/**
	 * @method static Query query()
	 * @method static EO_ElementV1_Result getByPrimary($primary, array $parameters = [])
	 * @method static EO_ElementV1_Result getById($id)
	 * @method static EO_ElementV1_Result getList(array $parameters = [])
	 * @method static EO_ElementV1_Entity getEntity()
	 * @method static \Bitrix\Iblock\ORM\EO_ElementV1 createObject($setDefaultValues = true)
	 * @method static \Bitrix\Iblock\ORM\EO_ElementV1_Collection createCollection()
	 * @method static \Bitrix\Iblock\ORM\EO_ElementV1 wakeUpObject($row)
	 * @method static \Bitrix\Iblock\ORM\EO_ElementV1_Collection wakeUpCollection($rows)
	 */
	class ElementV1Table extends \Bitrix\Main\ORM\Data\DataManager {}
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_ElementV1_Result exec()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 fetchObject()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1_Collection fetchCollection()
	 */
	class EO_ElementV1_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 fetchObject()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1_Collection fetchCollection()
	 */
	class EO_ElementV1_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 createObject($setDefaultValues = true)
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1_Collection createCollection()
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1 wakeUpObject($row)
	 * @method \Bitrix\Iblock\ORM\EO_ElementV1_Collection wakeUpCollection($rows)
	 */
	class EO_ElementV1_Entity extends \Bitrix\Main\ORM\Entity {}
}
/* ORMENTITYANNOTATION:Bitrix\Iblock\ElementTable */
namespace Bitrix\Iblock {
	/**
	 * EO_Element
	 * @see \Bitrix\Iblock\ElementTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getId()
	 * @method \Bitrix\Iblock\EO_Element setId(\int|\Bitrix\Main\DB\SqlExpression $id)
	 * @method bool hasId()
	 * @method bool isIdFilled()
	 * @method bool isIdChanged()
	 * @method \Bitrix\Main\Type\DateTime getTimestampX()
	 * @method \Bitrix\Iblock\EO_Element setTimestampX(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $timestampX)
	 * @method bool hasTimestampX()
	 * @method bool isTimestampXFilled()
	 * @method bool isTimestampXChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualTimestampX()
	 * @method \Bitrix\Main\Type\DateTime requireTimestampX()
	 * @method \Bitrix\Iblock\EO_Element resetTimestampX()
	 * @method \Bitrix\Iblock\EO_Element unsetTimestampX()
	 * @method \Bitrix\Main\Type\DateTime fillTimestampX()
	 * @method \int getModifiedBy()
	 * @method \Bitrix\Iblock\EO_Element setModifiedBy(\int|\Bitrix\Main\DB\SqlExpression $modifiedBy)
	 * @method bool hasModifiedBy()
	 * @method bool isModifiedByFilled()
	 * @method bool isModifiedByChanged()
	 * @method \int remindActualModifiedBy()
	 * @method \int requireModifiedBy()
	 * @method \Bitrix\Iblock\EO_Element resetModifiedBy()
	 * @method \Bitrix\Iblock\EO_Element unsetModifiedBy()
	 * @method \int fillModifiedBy()
	 * @method \Bitrix\Main\Type\DateTime getDateCreate()
	 * @method \Bitrix\Iblock\EO_Element setDateCreate(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $dateCreate)
	 * @method bool hasDateCreate()
	 * @method bool isDateCreateFilled()
	 * @method bool isDateCreateChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualDateCreate()
	 * @method \Bitrix\Main\Type\DateTime requireDateCreate()
	 * @method \Bitrix\Iblock\EO_Element resetDateCreate()
	 * @method \Bitrix\Iblock\EO_Element unsetDateCreate()
	 * @method \Bitrix\Main\Type\DateTime fillDateCreate()
	 * @method \int getCreatedBy()
	 * @method \Bitrix\Iblock\EO_Element setCreatedBy(\int|\Bitrix\Main\DB\SqlExpression $createdBy)
	 * @method bool hasCreatedBy()
	 * @method bool isCreatedByFilled()
	 * @method bool isCreatedByChanged()
	 * @method \int remindActualCreatedBy()
	 * @method \int requireCreatedBy()
	 * @method \Bitrix\Iblock\EO_Element resetCreatedBy()
	 * @method \Bitrix\Iblock\EO_Element unsetCreatedBy()
	 * @method \int fillCreatedBy()
	 * @method \int getIblockId()
	 * @method \Bitrix\Iblock\EO_Element setIblockId(\int|\Bitrix\Main\DB\SqlExpression $iblockId)
	 * @method bool hasIblockId()
	 * @method bool isIblockIdFilled()
	 * @method bool isIblockIdChanged()
	 * @method \int remindActualIblockId()
	 * @method \int requireIblockId()
	 * @method \Bitrix\Iblock\EO_Element resetIblockId()
	 * @method \Bitrix\Iblock\EO_Element unsetIblockId()
	 * @method \int fillIblockId()
	 * @method \int getIblockSectionId()
	 * @method \Bitrix\Iblock\EO_Element setIblockSectionId(\int|\Bitrix\Main\DB\SqlExpression $iblockSectionId)
	 * @method bool hasIblockSectionId()
	 * @method bool isIblockSectionIdFilled()
	 * @method bool isIblockSectionIdChanged()
	 * @method \int remindActualIblockSectionId()
	 * @method \int requireIblockSectionId()
	 * @method \Bitrix\Iblock\EO_Element resetIblockSectionId()
	 * @method \Bitrix\Iblock\EO_Element unsetIblockSectionId()
	 * @method \int fillIblockSectionId()
	 * @method \boolean getActive()
	 * @method \Bitrix\Iblock\EO_Element setActive(\boolean|\Bitrix\Main\DB\SqlExpression $active)
	 * @method bool hasActive()
	 * @method bool isActiveFilled()
	 * @method bool isActiveChanged()
	 * @method \boolean remindActualActive()
	 * @method \boolean requireActive()
	 * @method \Bitrix\Iblock\EO_Element resetActive()
	 * @method \Bitrix\Iblock\EO_Element unsetActive()
	 * @method \boolean fillActive()
	 * @method \Bitrix\Main\Type\DateTime getActiveFrom()
	 * @method \Bitrix\Iblock\EO_Element setActiveFrom(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $activeFrom)
	 * @method bool hasActiveFrom()
	 * @method bool isActiveFromFilled()
	 * @method bool isActiveFromChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualActiveFrom()
	 * @method \Bitrix\Main\Type\DateTime requireActiveFrom()
	 * @method \Bitrix\Iblock\EO_Element resetActiveFrom()
	 * @method \Bitrix\Iblock\EO_Element unsetActiveFrom()
	 * @method \Bitrix\Main\Type\DateTime fillActiveFrom()
	 * @method \Bitrix\Main\Type\DateTime getActiveTo()
	 * @method \Bitrix\Iblock\EO_Element setActiveTo(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $activeTo)
	 * @method bool hasActiveTo()
	 * @method bool isActiveToFilled()
	 * @method bool isActiveToChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualActiveTo()
	 * @method \Bitrix\Main\Type\DateTime requireActiveTo()
	 * @method \Bitrix\Iblock\EO_Element resetActiveTo()
	 * @method \Bitrix\Iblock\EO_Element unsetActiveTo()
	 * @method \Bitrix\Main\Type\DateTime fillActiveTo()
	 * @method \int getSort()
	 * @method \Bitrix\Iblock\EO_Element setSort(\int|\Bitrix\Main\DB\SqlExpression $sort)
	 * @method bool hasSort()
	 * @method bool isSortFilled()
	 * @method bool isSortChanged()
	 * @method \int remindActualSort()
	 * @method \int requireSort()
	 * @method \Bitrix\Iblock\EO_Element resetSort()
	 * @method \Bitrix\Iblock\EO_Element unsetSort()
	 * @method \int fillSort()
	 * @method \string getName()
	 * @method \Bitrix\Iblock\EO_Element setName(\string|\Bitrix\Main\DB\SqlExpression $name)
	 * @method bool hasName()
	 * @method bool isNameFilled()
	 * @method bool isNameChanged()
	 * @method \string remindActualName()
	 * @method \string requireName()
	 * @method \Bitrix\Iblock\EO_Element resetName()
	 * @method \Bitrix\Iblock\EO_Element unsetName()
	 * @method \string fillName()
	 * @method \int getPreviewPicture()
	 * @method \Bitrix\Iblock\EO_Element setPreviewPicture(\int|\Bitrix\Main\DB\SqlExpression $previewPicture)
	 * @method bool hasPreviewPicture()
	 * @method bool isPreviewPictureFilled()
	 * @method bool isPreviewPictureChanged()
	 * @method \int remindActualPreviewPicture()
	 * @method \int requirePreviewPicture()
	 * @method \Bitrix\Iblock\EO_Element resetPreviewPicture()
	 * @method \Bitrix\Iblock\EO_Element unsetPreviewPicture()
	 * @method \int fillPreviewPicture()
	 * @method \string getPreviewText()
	 * @method \Bitrix\Iblock\EO_Element setPreviewText(\string|\Bitrix\Main\DB\SqlExpression $previewText)
	 * @method bool hasPreviewText()
	 * @method bool isPreviewTextFilled()
	 * @method bool isPreviewTextChanged()
	 * @method \string remindActualPreviewText()
	 * @method \string requirePreviewText()
	 * @method \Bitrix\Iblock\EO_Element resetPreviewText()
	 * @method \Bitrix\Iblock\EO_Element unsetPreviewText()
	 * @method \string fillPreviewText()
	 * @method \string getPreviewTextType()
	 * @method \Bitrix\Iblock\EO_Element setPreviewTextType(\string|\Bitrix\Main\DB\SqlExpression $previewTextType)
	 * @method bool hasPreviewTextType()
	 * @method bool isPreviewTextTypeFilled()
	 * @method bool isPreviewTextTypeChanged()
	 * @method \string remindActualPreviewTextType()
	 * @method \string requirePreviewTextType()
	 * @method \Bitrix\Iblock\EO_Element resetPreviewTextType()
	 * @method \Bitrix\Iblock\EO_Element unsetPreviewTextType()
	 * @method \string fillPreviewTextType()
	 * @method \int getDetailPicture()
	 * @method \Bitrix\Iblock\EO_Element setDetailPicture(\int|\Bitrix\Main\DB\SqlExpression $detailPicture)
	 * @method bool hasDetailPicture()
	 * @method bool isDetailPictureFilled()
	 * @method bool isDetailPictureChanged()
	 * @method \int remindActualDetailPicture()
	 * @method \int requireDetailPicture()
	 * @method \Bitrix\Iblock\EO_Element resetDetailPicture()
	 * @method \Bitrix\Iblock\EO_Element unsetDetailPicture()
	 * @method \int fillDetailPicture()
	 * @method \string getDetailText()
	 * @method \Bitrix\Iblock\EO_Element setDetailText(\string|\Bitrix\Main\DB\SqlExpression $detailText)
	 * @method bool hasDetailText()
	 * @method bool isDetailTextFilled()
	 * @method bool isDetailTextChanged()
	 * @method \string remindActualDetailText()
	 * @method \string requireDetailText()
	 * @method \Bitrix\Iblock\EO_Element resetDetailText()
	 * @method \Bitrix\Iblock\EO_Element unsetDetailText()
	 * @method \string fillDetailText()
	 * @method \string getDetailTextType()
	 * @method \Bitrix\Iblock\EO_Element setDetailTextType(\string|\Bitrix\Main\DB\SqlExpression $detailTextType)
	 * @method bool hasDetailTextType()
	 * @method bool isDetailTextTypeFilled()
	 * @method bool isDetailTextTypeChanged()
	 * @method \string remindActualDetailTextType()
	 * @method \string requireDetailTextType()
	 * @method \Bitrix\Iblock\EO_Element resetDetailTextType()
	 * @method \Bitrix\Iblock\EO_Element unsetDetailTextType()
	 * @method \string fillDetailTextType()
	 * @method \string getSearchableContent()
	 * @method \Bitrix\Iblock\EO_Element setSearchableContent(\string|\Bitrix\Main\DB\SqlExpression $searchableContent)
	 * @method bool hasSearchableContent()
	 * @method bool isSearchableContentFilled()
	 * @method bool isSearchableContentChanged()
	 * @method \string remindActualSearchableContent()
	 * @method \string requireSearchableContent()
	 * @method \Bitrix\Iblock\EO_Element resetSearchableContent()
	 * @method \Bitrix\Iblock\EO_Element unsetSearchableContent()
	 * @method \string fillSearchableContent()
	 * @method \int getWfStatusId()
	 * @method \Bitrix\Iblock\EO_Element setWfStatusId(\int|\Bitrix\Main\DB\SqlExpression $wfStatusId)
	 * @method bool hasWfStatusId()
	 * @method bool isWfStatusIdFilled()
	 * @method bool isWfStatusIdChanged()
	 * @method \int remindActualWfStatusId()
	 * @method \int requireWfStatusId()
	 * @method \Bitrix\Iblock\EO_Element resetWfStatusId()
	 * @method \Bitrix\Iblock\EO_Element unsetWfStatusId()
	 * @method \int fillWfStatusId()
	 * @method \int getWfParentElementId()
	 * @method \Bitrix\Iblock\EO_Element setWfParentElementId(\int|\Bitrix\Main\DB\SqlExpression $wfParentElementId)
	 * @method bool hasWfParentElementId()
	 * @method bool isWfParentElementIdFilled()
	 * @method bool isWfParentElementIdChanged()
	 * @method \int remindActualWfParentElementId()
	 * @method \int requireWfParentElementId()
	 * @method \Bitrix\Iblock\EO_Element resetWfParentElementId()
	 * @method \Bitrix\Iblock\EO_Element unsetWfParentElementId()
	 * @method \int fillWfParentElementId()
	 * @method \string getWfNew()
	 * @method \Bitrix\Iblock\EO_Element setWfNew(\string|\Bitrix\Main\DB\SqlExpression $wfNew)
	 * @method bool hasWfNew()
	 * @method bool isWfNewFilled()
	 * @method bool isWfNewChanged()
	 * @method \string remindActualWfNew()
	 * @method \string requireWfNew()
	 * @method \Bitrix\Iblock\EO_Element resetWfNew()
	 * @method \Bitrix\Iblock\EO_Element unsetWfNew()
	 * @method \string fillWfNew()
	 * @method \int getWfLockedBy()
	 * @method \Bitrix\Iblock\EO_Element setWfLockedBy(\int|\Bitrix\Main\DB\SqlExpression $wfLockedBy)
	 * @method bool hasWfLockedBy()
	 * @method bool isWfLockedByFilled()
	 * @method bool isWfLockedByChanged()
	 * @method \int remindActualWfLockedBy()
	 * @method \int requireWfLockedBy()
	 * @method \Bitrix\Iblock\EO_Element resetWfLockedBy()
	 * @method \Bitrix\Iblock\EO_Element unsetWfLockedBy()
	 * @method \int fillWfLockedBy()
	 * @method \Bitrix\Main\Type\DateTime getWfDateLock()
	 * @method \Bitrix\Iblock\EO_Element setWfDateLock(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $wfDateLock)
	 * @method bool hasWfDateLock()
	 * @method bool isWfDateLockFilled()
	 * @method bool isWfDateLockChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualWfDateLock()
	 * @method \Bitrix\Main\Type\DateTime requireWfDateLock()
	 * @method \Bitrix\Iblock\EO_Element resetWfDateLock()
	 * @method \Bitrix\Iblock\EO_Element unsetWfDateLock()
	 * @method \Bitrix\Main\Type\DateTime fillWfDateLock()
	 * @method \string getWfComments()
	 * @method \Bitrix\Iblock\EO_Element setWfComments(\string|\Bitrix\Main\DB\SqlExpression $wfComments)
	 * @method bool hasWfComments()
	 * @method bool isWfCommentsFilled()
	 * @method bool isWfCommentsChanged()
	 * @method \string remindActualWfComments()
	 * @method \string requireWfComments()
	 * @method \Bitrix\Iblock\EO_Element resetWfComments()
	 * @method \Bitrix\Iblock\EO_Element unsetWfComments()
	 * @method \string fillWfComments()
	 * @method \boolean getInSections()
	 * @method \Bitrix\Iblock\EO_Element setInSections(\boolean|\Bitrix\Main\DB\SqlExpression $inSections)
	 * @method bool hasInSections()
	 * @method bool isInSectionsFilled()
	 * @method bool isInSectionsChanged()
	 * @method \boolean remindActualInSections()
	 * @method \boolean requireInSections()
	 * @method \Bitrix\Iblock\EO_Element resetInSections()
	 * @method \Bitrix\Iblock\EO_Element unsetInSections()
	 * @method \boolean fillInSections()
	 * @method \string getXmlId()
	 * @method \Bitrix\Iblock\EO_Element setXmlId(\string|\Bitrix\Main\DB\SqlExpression $xmlId)
	 * @method bool hasXmlId()
	 * @method bool isXmlIdFilled()
	 * @method bool isXmlIdChanged()
	 * @method \string remindActualXmlId()
	 * @method \string requireXmlId()
	 * @method \Bitrix\Iblock\EO_Element resetXmlId()
	 * @method \Bitrix\Iblock\EO_Element unsetXmlId()
	 * @method \string fillXmlId()
	 * @method \string getCode()
	 * @method \Bitrix\Iblock\EO_Element setCode(\string|\Bitrix\Main\DB\SqlExpression $code)
	 * @method bool hasCode()
	 * @method bool isCodeFilled()
	 * @method bool isCodeChanged()
	 * @method \string remindActualCode()
	 * @method \string requireCode()
	 * @method \Bitrix\Iblock\EO_Element resetCode()
	 * @method \Bitrix\Iblock\EO_Element unsetCode()
	 * @method \string fillCode()
	 * @method \string getTags()
	 * @method \Bitrix\Iblock\EO_Element setTags(\string|\Bitrix\Main\DB\SqlExpression $tags)
	 * @method bool hasTags()
	 * @method bool isTagsFilled()
	 * @method bool isTagsChanged()
	 * @method \string remindActualTags()
	 * @method \string requireTags()
	 * @method \Bitrix\Iblock\EO_Element resetTags()
	 * @method \Bitrix\Iblock\EO_Element unsetTags()
	 * @method \string fillTags()
	 * @method \string getTmpId()
	 * @method \Bitrix\Iblock\EO_Element setTmpId(\string|\Bitrix\Main\DB\SqlExpression $tmpId)
	 * @method bool hasTmpId()
	 * @method bool isTmpIdFilled()
	 * @method bool isTmpIdChanged()
	 * @method \string remindActualTmpId()
	 * @method \string requireTmpId()
	 * @method \Bitrix\Iblock\EO_Element resetTmpId()
	 * @method \Bitrix\Iblock\EO_Element unsetTmpId()
	 * @method \string fillTmpId()
	 * @method \int getShowCounter()
	 * @method \Bitrix\Iblock\EO_Element setShowCounter(\int|\Bitrix\Main\DB\SqlExpression $showCounter)
	 * @method bool hasShowCounter()
	 * @method bool isShowCounterFilled()
	 * @method bool isShowCounterChanged()
	 * @method \int remindActualShowCounter()
	 * @method \int requireShowCounter()
	 * @method \Bitrix\Iblock\EO_Element resetShowCounter()
	 * @method \Bitrix\Iblock\EO_Element unsetShowCounter()
	 * @method \int fillShowCounter()
	 * @method \Bitrix\Main\Type\DateTime getShowCounterStart()
	 * @method \Bitrix\Iblock\EO_Element setShowCounterStart(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $showCounterStart)
	 * @method bool hasShowCounterStart()
	 * @method bool isShowCounterStartFilled()
	 * @method bool isShowCounterStartChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualShowCounterStart()
	 * @method \Bitrix\Main\Type\DateTime requireShowCounterStart()
	 * @method \Bitrix\Iblock\EO_Element resetShowCounterStart()
	 * @method \Bitrix\Iblock\EO_Element unsetShowCounterStart()
	 * @method \Bitrix\Main\Type\DateTime fillShowCounterStart()
	 * @method \Bitrix\Iblock\Iblock getIblock()
	 * @method \Bitrix\Iblock\Iblock remindActualIblock()
	 * @method \Bitrix\Iblock\Iblock requireIblock()
	 * @method \Bitrix\Iblock\EO_Element setIblock(\Bitrix\Iblock\Iblock $object)
	 * @method \Bitrix\Iblock\EO_Element resetIblock()
	 * @method \Bitrix\Iblock\EO_Element unsetIblock()
	 * @method bool hasIblock()
	 * @method bool isIblockFilled()
	 * @method bool isIblockChanged()
	 * @method \Bitrix\Iblock\Iblock fillIblock()
	 * @method \Bitrix\Iblock\EO_Element getWfParentElement()
	 * @method \Bitrix\Iblock\EO_Element remindActualWfParentElement()
	 * @method \Bitrix\Iblock\EO_Element requireWfParentElement()
	 * @method \Bitrix\Iblock\EO_Element setWfParentElement(\Bitrix\Iblock\EO_Element $object)
	 * @method \Bitrix\Iblock\EO_Element resetWfParentElement()
	 * @method \Bitrix\Iblock\EO_Element unsetWfParentElement()
	 * @method bool hasWfParentElement()
	 * @method bool isWfParentElementFilled()
	 * @method bool isWfParentElementChanged()
	 * @method \Bitrix\Iblock\EO_Element fillWfParentElement()
	 * @method \Bitrix\Iblock\EO_Section getIblockSection()
	 * @method \Bitrix\Iblock\EO_Section remindActualIblockSection()
	 * @method \Bitrix\Iblock\EO_Section requireIblockSection()
	 * @method \Bitrix\Iblock\EO_Element setIblockSection(\Bitrix\Iblock\EO_Section $object)
	 * @method \Bitrix\Iblock\EO_Element resetIblockSection()
	 * @method \Bitrix\Iblock\EO_Element unsetIblockSection()
	 * @method bool hasIblockSection()
	 * @method bool isIblockSectionFilled()
	 * @method bool isIblockSectionChanged()
	 * @method \Bitrix\Iblock\EO_Section fillIblockSection()
	 * @method \Bitrix\Main\EO_User getModifiedByUser()
	 * @method \Bitrix\Main\EO_User remindActualModifiedByUser()
	 * @method \Bitrix\Main\EO_User requireModifiedByUser()
	 * @method \Bitrix\Iblock\EO_Element setModifiedByUser(\Bitrix\Main\EO_User $object)
	 * @method \Bitrix\Iblock\EO_Element resetModifiedByUser()
	 * @method \Bitrix\Iblock\EO_Element unsetModifiedByUser()
	 * @method bool hasModifiedByUser()
	 * @method bool isModifiedByUserFilled()
	 * @method bool isModifiedByUserChanged()
	 * @method \Bitrix\Main\EO_User fillModifiedByUser()
	 * @method \Bitrix\Main\EO_User getCreatedByUser()
	 * @method \Bitrix\Main\EO_User remindActualCreatedByUser()
	 * @method \Bitrix\Main\EO_User requireCreatedByUser()
	 * @method \Bitrix\Iblock\EO_Element setCreatedByUser(\Bitrix\Main\EO_User $object)
	 * @method \Bitrix\Iblock\EO_Element resetCreatedByUser()
	 * @method \Bitrix\Iblock\EO_Element unsetCreatedByUser()
	 * @method bool hasCreatedByUser()
	 * @method bool isCreatedByUserFilled()
	 * @method bool isCreatedByUserChanged()
	 * @method \Bitrix\Main\EO_User fillCreatedByUser()
	 * @method \Bitrix\Main\EO_User getWfLockedByUser()
	 * @method \Bitrix\Main\EO_User remindActualWfLockedByUser()
	 * @method \Bitrix\Main\EO_User requireWfLockedByUser()
	 * @method \Bitrix\Iblock\EO_Element setWfLockedByUser(\Bitrix\Main\EO_User $object)
	 * @method \Bitrix\Iblock\EO_Element resetWfLockedByUser()
	 * @method \Bitrix\Iblock\EO_Element unsetWfLockedByUser()
	 * @method bool hasWfLockedByUser()
	 * @method bool isWfLockedByUserFilled()
	 * @method bool isWfLockedByUserChanged()
	 * @method \Bitrix\Main\EO_User fillWfLockedByUser()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Bitrix\Iblock\EO_Element set($fieldName, $value)
	 * @method \Bitrix\Iblock\EO_Element reset($fieldName)
	 * @method \Bitrix\Iblock\EO_Element unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method mixed fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Bitrix\Iblock\EO_Element wakeUp($data)
	 */
	class EO_Element extends \Bitrix\Main\ORM\Objectify\EntityObject {
		/* @var \Bitrix\Iblock\ElementTable */
		static public $dataClass = '\Bitrix\Iblock\ElementTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Iblock {
	/**
	 * EO_Element_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getIdList()
	 * @method \Bitrix\Main\Type\DateTime[] getTimestampXList()
	 * @method \Bitrix\Main\Type\DateTime[] fillTimestampX()
	 * @method \int[] getModifiedByList()
	 * @method \int[] fillModifiedBy()
	 * @method \Bitrix\Main\Type\DateTime[] getDateCreateList()
	 * @method \Bitrix\Main\Type\DateTime[] fillDateCreate()
	 * @method \int[] getCreatedByList()
	 * @method \int[] fillCreatedBy()
	 * @method \int[] getIblockIdList()
	 * @method \int[] fillIblockId()
	 * @method \int[] getIblockSectionIdList()
	 * @method \int[] fillIblockSectionId()
	 * @method \boolean[] getActiveList()
	 * @method \boolean[] fillActive()
	 * @method \Bitrix\Main\Type\DateTime[] getActiveFromList()
	 * @method \Bitrix\Main\Type\DateTime[] fillActiveFrom()
	 * @method \Bitrix\Main\Type\DateTime[] getActiveToList()
	 * @method \Bitrix\Main\Type\DateTime[] fillActiveTo()
	 * @method \int[] getSortList()
	 * @method \int[] fillSort()
	 * @method \string[] getNameList()
	 * @method \string[] fillName()
	 * @method \int[] getPreviewPictureList()
	 * @method \int[] fillPreviewPicture()
	 * @method \string[] getPreviewTextList()
	 * @method \string[] fillPreviewText()
	 * @method \string[] getPreviewTextTypeList()
	 * @method \string[] fillPreviewTextType()
	 * @method \int[] getDetailPictureList()
	 * @method \int[] fillDetailPicture()
	 * @method \string[] getDetailTextList()
	 * @method \string[] fillDetailText()
	 * @method \string[] getDetailTextTypeList()
	 * @method \string[] fillDetailTextType()
	 * @method \string[] getSearchableContentList()
	 * @method \string[] fillSearchableContent()
	 * @method \int[] getWfStatusIdList()
	 * @method \int[] fillWfStatusId()
	 * @method \int[] getWfParentElementIdList()
	 * @method \int[] fillWfParentElementId()
	 * @method \string[] getWfNewList()
	 * @method \string[] fillWfNew()
	 * @method \int[] getWfLockedByList()
	 * @method \int[] fillWfLockedBy()
	 * @method \Bitrix\Main\Type\DateTime[] getWfDateLockList()
	 * @method \Bitrix\Main\Type\DateTime[] fillWfDateLock()
	 * @method \string[] getWfCommentsList()
	 * @method \string[] fillWfComments()
	 * @method \boolean[] getInSectionsList()
	 * @method \boolean[] fillInSections()
	 * @method \string[] getXmlIdList()
	 * @method \string[] fillXmlId()
	 * @method \string[] getCodeList()
	 * @method \string[] fillCode()
	 * @method \string[] getTagsList()
	 * @method \string[] fillTags()
	 * @method \string[] getTmpIdList()
	 * @method \string[] fillTmpId()
	 * @method \int[] getShowCounterList()
	 * @method \int[] fillShowCounter()
	 * @method \Bitrix\Main\Type\DateTime[] getShowCounterStartList()
	 * @method \Bitrix\Main\Type\DateTime[] fillShowCounterStart()
	 * @method \Bitrix\Iblock\Iblock[] getIblockList()
	 * @method \Bitrix\Iblock\EO_Element_Collection getIblockCollection()
	 * @method \Bitrix\Iblock\EO_Iblock_Collection fillIblock()
	 * @method \Bitrix\Iblock\EO_Element[] getWfParentElementList()
	 * @method \Bitrix\Iblock\EO_Element_Collection getWfParentElementCollection()
	 * @method \Bitrix\Iblock\EO_Element_Collection fillWfParentElement()
	 * @method \Bitrix\Iblock\EO_Section[] getIblockSectionList()
	 * @method \Bitrix\Iblock\EO_Element_Collection getIblockSectionCollection()
	 * @method \Bitrix\Iblock\EO_Section_Collection fillIblockSection()
	 * @method \Bitrix\Main\EO_User[] getModifiedByUserList()
	 * @method \Bitrix\Iblock\EO_Element_Collection getModifiedByUserCollection()
	 * @method \Bitrix\Main\EO_User_Collection fillModifiedByUser()
	 * @method \Bitrix\Main\EO_User[] getCreatedByUserList()
	 * @method \Bitrix\Iblock\EO_Element_Collection getCreatedByUserCollection()
	 * @method \Bitrix\Main\EO_User_Collection fillCreatedByUser()
	 * @method \Bitrix\Main\EO_User[] getWfLockedByUserList()
	 * @method \Bitrix\Iblock\EO_Element_Collection getWfLockedByUserCollection()
	 * @method \Bitrix\Main\EO_User_Collection fillWfLockedByUser()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Bitrix\Iblock\EO_Element $object)
	 * @method bool has(\Bitrix\Iblock\EO_Element $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Bitrix\Iblock\EO_Element getByPrimary($primary)
	 * @method \Bitrix\Iblock\EO_Element[] getAll()
	 * @method bool remove(\Bitrix\Iblock\EO_Element $object)
	 * @method void removeByPrimary($primary)
	 * @method array|\Bitrix\Main\ORM\Objectify\Collection|null fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Bitrix\Iblock\EO_Element_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Bitrix\Iblock\EO_Element current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 * @method \Bitrix\Iblock\EO_Element_Collection merge(?\Bitrix\Iblock\EO_Element_Collection $collection)
	 * @method bool isEmpty()
	 * @method array collectValues(int $valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, int $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL, bool $recursive = false)
	 * @method \Bitrix\Iblock\EO_Element|null find(callable $callback)
	 * @method \Bitrix\Iblock\EO_Element_Collection filter(callable $callback)
	 */
	class EO_Element_Collection extends \Bitrix\Main\ORM\Objectify\Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Iblock\ElementTable */
		static public $dataClass = '\Bitrix\Iblock\ElementTable';
	}
}
namespace Bitrix\Iblock {
	/**
	 * @method static EO_Element_Query query()
	 * @method static EO_Element_Result getByPrimary($primary, array $parameters = [])
	 * @method static EO_Element_Result getById($id)
	 * @method static EO_Element_Result getList(array $parameters = [])
	 * @method static EO_Element_Entity getEntity()
	 * @method static \Bitrix\Iblock\EO_Element createObject($setDefaultValues = true)
	 * @method static \Bitrix\Iblock\EO_Element_Collection createCollection()
	 * @method static \Bitrix\Iblock\EO_Element wakeUpObject($row)
	 * @method static \Bitrix\Iblock\EO_Element_Collection wakeUpCollection($rows)
	 */
	class ElementTable extends \Bitrix\Main\ORM\Data\DataManager {}
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_Element_Result exec()
	 * @method \Bitrix\Iblock\EO_Element fetchObject()
	 * @method \Bitrix\Iblock\EO_Element_Collection fetchCollection()
	 */
	class EO_Element_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Bitrix\Iblock\EO_Element fetchObject()
	 * @method \Bitrix\Iblock\EO_Element_Collection fetchCollection()
	 */
	class EO_Element_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Bitrix\Iblock\EO_Element createObject($setDefaultValues = true)
	 * @method \Bitrix\Iblock\EO_Element_Collection createCollection()
	 * @method \Bitrix\Iblock\EO_Element wakeUpObject($row)
	 * @method \Bitrix\Iblock\EO_Element_Collection wakeUpCollection($rows)
	 */
	class EO_Element_Entity extends \Bitrix\Main\ORM\Entity {}
}
/* ORMENTITYANNOTATION:Bitrix\Iblock\SectionElementTable */
namespace Bitrix\Iblock {
	/**
	 * EO_SectionElement
	 * @see \Bitrix\Iblock\SectionElementTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getIblockSectionId()
	 * @method \Bitrix\Iblock\EO_SectionElement setIblockSectionId(\int|\Bitrix\Main\DB\SqlExpression $iblockSectionId)
	 * @method bool hasIblockSectionId()
	 * @method bool isIblockSectionIdFilled()
	 * @method bool isIblockSectionIdChanged()
	 * @method \int getIblockElementId()
	 * @method \Bitrix\Iblock\EO_SectionElement setIblockElementId(\int|\Bitrix\Main\DB\SqlExpression $iblockElementId)
	 * @method bool hasIblockElementId()
	 * @method bool isIblockElementIdFilled()
	 * @method bool isIblockElementIdChanged()
	 * @method \int getAdditionalPropertyId()
	 * @method \Bitrix\Iblock\EO_SectionElement setAdditionalPropertyId(\int|\Bitrix\Main\DB\SqlExpression $additionalPropertyId)
	 * @method bool hasAdditionalPropertyId()
	 * @method bool isAdditionalPropertyIdFilled()
	 * @method bool isAdditionalPropertyIdChanged()
	 * @method \int remindActualAdditionalPropertyId()
	 * @method \int requireAdditionalPropertyId()
	 * @method \Bitrix\Iblock\EO_SectionElement resetAdditionalPropertyId()
	 * @method \Bitrix\Iblock\EO_SectionElement unsetAdditionalPropertyId()
	 * @method \int fillAdditionalPropertyId()
	 * @method \Bitrix\Iblock\EO_Section getIblockSection()
	 * @method \Bitrix\Iblock\EO_Section remindActualIblockSection()
	 * @method \Bitrix\Iblock\EO_Section requireIblockSection()
	 * @method \Bitrix\Iblock\EO_SectionElement setIblockSection(\Bitrix\Iblock\EO_Section $object)
	 * @method \Bitrix\Iblock\EO_SectionElement resetIblockSection()
	 * @method \Bitrix\Iblock\EO_SectionElement unsetIblockSection()
	 * @method bool hasIblockSection()
	 * @method bool isIblockSectionFilled()
	 * @method bool isIblockSectionChanged()
	 * @method \Bitrix\Iblock\EO_Section fillIblockSection()
	 * @method \Bitrix\Iblock\EO_Element getIblockElement()
	 * @method \Bitrix\Iblock\EO_Element remindActualIblockElement()
	 * @method \Bitrix\Iblock\EO_Element requireIblockElement()
	 * @method \Bitrix\Iblock\EO_SectionElement setIblockElement(\Bitrix\Iblock\EO_Element $object)
	 * @method \Bitrix\Iblock\EO_SectionElement resetIblockElement()
	 * @method \Bitrix\Iblock\EO_SectionElement unsetIblockElement()
	 * @method bool hasIblockElement()
	 * @method bool isIblockElementFilled()
	 * @method bool isIblockElementChanged()
	 * @method \Bitrix\Iblock\EO_Element fillIblockElement()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog getRegularElement14()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog remindActualRegularElement14()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog requireRegularElement14()
	 * @method \Bitrix\Iblock\EO_SectionElement setRegularElement14(\Bitrix\Iblock\Elements\EO_ElementCatalog $object)
	 * @method \Bitrix\Iblock\EO_SectionElement resetRegularElement14()
	 * @method \Bitrix\Iblock\EO_SectionElement unsetRegularElement14()
	 * @method bool hasRegularElement14()
	 * @method bool isRegularElement14Filled()
	 * @method bool isRegularElement14Changed()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog fillRegularElement14()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Bitrix\Iblock\EO_SectionElement set($fieldName, $value)
	 * @method \Bitrix\Iblock\EO_SectionElement reset($fieldName)
	 * @method \Bitrix\Iblock\EO_SectionElement unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method mixed fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Bitrix\Iblock\EO_SectionElement wakeUp($data)
	 */
	class EO_SectionElement extends \Bitrix\Main\ORM\Objectify\EntityObject {
		/* @var \Bitrix\Iblock\SectionElementTable */
		static public $dataClass = '\Bitrix\Iblock\SectionElementTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Iblock {
	/**
	 * EO_SectionElement_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getIblockSectionIdList()
	 * @method \int[] getIblockElementIdList()
	 * @method \int[] getAdditionalPropertyIdList()
	 * @method \int[] fillAdditionalPropertyId()
	 * @method \Bitrix\Iblock\EO_Section[] getIblockSectionList()
	 * @method \Bitrix\Iblock\EO_SectionElement_Collection getIblockSectionCollection()
	 * @method \Bitrix\Iblock\EO_Section_Collection fillIblockSection()
	 * @method \Bitrix\Iblock\EO_Element[] getIblockElementList()
	 * @method \Bitrix\Iblock\EO_SectionElement_Collection getIblockElementCollection()
	 * @method \Bitrix\Iblock\EO_Element_Collection fillIblockElement()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog[] getRegularElement14List()
	 * @method \Bitrix\Iblock\EO_SectionElement_Collection getRegularElement14Collection()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog_Collection fillRegularElement14()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Bitrix\Iblock\EO_SectionElement $object)
	 * @method bool has(\Bitrix\Iblock\EO_SectionElement $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Bitrix\Iblock\EO_SectionElement getByPrimary($primary)
	 * @method \Bitrix\Iblock\EO_SectionElement[] getAll()
	 * @method bool remove(\Bitrix\Iblock\EO_SectionElement $object)
	 * @method void removeByPrimary($primary)
	 * @method array|\Bitrix\Main\ORM\Objectify\Collection|null fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Bitrix\Iblock\EO_SectionElement_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Bitrix\Iblock\EO_SectionElement current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 * @method \Bitrix\Iblock\EO_SectionElement_Collection merge(?\Bitrix\Iblock\EO_SectionElement_Collection $collection)
	 * @method bool isEmpty()
	 * @method array collectValues(int $valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, int $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL, bool $recursive = false)
	 * @method \Bitrix\Iblock\EO_SectionElement|null find(callable $callback)
	 * @method \Bitrix\Iblock\EO_SectionElement_Collection filter(callable $callback)
	 */
	class EO_SectionElement_Collection extends \Bitrix\Main\ORM\Objectify\Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Iblock\SectionElementTable */
		static public $dataClass = '\Bitrix\Iblock\SectionElementTable';
	}
}
namespace Bitrix\Iblock {
	/**
	 * @method static EO_SectionElement_Query query()
	 * @method static EO_SectionElement_Result getByPrimary($primary, array $parameters = [])
	 * @method static EO_SectionElement_Result getById($id)
	 * @method static EO_SectionElement_Result getList(array $parameters = [])
	 * @method static EO_SectionElement_Entity getEntity()
	 * @method static \Bitrix\Iblock\EO_SectionElement createObject($setDefaultValues = true)
	 * @method static \Bitrix\Iblock\EO_SectionElement_Collection createCollection()
	 * @method static \Bitrix\Iblock\EO_SectionElement wakeUpObject($row)
	 * @method static \Bitrix\Iblock\EO_SectionElement_Collection wakeUpCollection($rows)
	 */
	class SectionElementTable extends \Bitrix\Main\ORM\Data\DataManager {}
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_SectionElement_Result exec()
	 * @method \Bitrix\Iblock\EO_SectionElement fetchObject()
	 * @method \Bitrix\Iblock\EO_SectionElement_Collection fetchCollection()
	 */
	class EO_SectionElement_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Bitrix\Iblock\EO_SectionElement fetchObject()
	 * @method \Bitrix\Iblock\EO_SectionElement_Collection fetchCollection()
	 */
	class EO_SectionElement_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Bitrix\Iblock\EO_SectionElement createObject($setDefaultValues = true)
	 * @method \Bitrix\Iblock\EO_SectionElement_Collection createCollection()
	 * @method \Bitrix\Iblock\EO_SectionElement wakeUpObject($row)
	 * @method \Bitrix\Iblock\EO_SectionElement_Collection wakeUpCollection($rows)
	 */
	class EO_SectionElement_Entity extends \Bitrix\Main\ORM\Entity {}
}
/* ORMENTITYANNOTATION:Bitrix\Iblock\Elements\IblockProperty61Table */
namespace Bitrix\Iblock\Elements {
	/**
	 * EO_IblockProperty61
	 * @see \Bitrix\Iblock\Elements\IblockProperty61Table
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 setId(\int|\Bitrix\Main\DB\SqlExpression $id)
	 * @method bool hasId()
	 * @method bool isIdFilled()
	 * @method bool isIdChanged()
	 * @method \int getIblockElementId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 setIblockElementId(\int|\Bitrix\Main\DB\SqlExpression $iblockElementId)
	 * @method bool hasIblockElementId()
	 * @method bool isIblockElementIdFilled()
	 * @method bool isIblockElementIdChanged()
	 * @method \int remindActualIblockElementId()
	 * @method \int requireIblockElementId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 resetIblockElementId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 unsetIblockElementId()
	 * @method \int fillIblockElementId()
	 * @method \int getIblockPropertyId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 setIblockPropertyId(\int|\Bitrix\Main\DB\SqlExpression $iblockPropertyId)
	 * @method bool hasIblockPropertyId()
	 * @method bool isIblockPropertyIdFilled()
	 * @method bool isIblockPropertyIdChanged()
	 * @method \int remindActualIblockPropertyId()
	 * @method \int requireIblockPropertyId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 resetIblockPropertyId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 unsetIblockPropertyId()
	 * @method \int fillIblockPropertyId()
	 * @method \int getValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 setValue(\int|\Bitrix\Main\DB\SqlExpression $value)
	 * @method bool hasValue()
	 * @method bool isValueFilled()
	 * @method bool isValueChanged()
	 * @method \int remindActualValue()
	 * @method \int requireValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 resetValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 unsetValue()
	 * @method \int fillValue()
	 * @method \Bitrix\Main\EO_File getFile()
	 * @method \Bitrix\Main\EO_File remindActualFile()
	 * @method \Bitrix\Main\EO_File requireFile()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 setFile(\Bitrix\Main\EO_File $object)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 resetFile()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 unsetFile()
	 * @method bool hasFile()
	 * @method bool isFileFilled()
	 * @method bool isFileChanged()
	 * @method \Bitrix\Main\EO_File fillFile()
	 * @method \string getIblockGenericValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 setIblockGenericValue(\string|\Bitrix\Main\DB\SqlExpression $iblockGenericValue)
	 * @method bool hasIblockGenericValue()
	 * @method bool isIblockGenericValueFilled()
	 * @method bool isIblockGenericValueChanged()
	 * @method \string remindActualIblockGenericValue()
	 * @method \string requireIblockGenericValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 resetIblockGenericValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 unsetIblockGenericValue()
	 * @method \string fillIblockGenericValue()
	 * @method \string getDescription()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 setDescription(\string|\Bitrix\Main\DB\SqlExpression $description)
	 * @method bool hasDescription()
	 * @method bool isDescriptionFilled()
	 * @method bool isDescriptionChanged()
	 * @method \string remindActualDescription()
	 * @method \string requireDescription()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 resetDescription()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 unsetDescription()
	 * @method \string fillDescription()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog getSrcElement()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog remindActualSrcElement()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog requireSrcElement()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 setSrcElement(\Bitrix\Iblock\Elements\EO_ElementCatalog $object)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 resetSrcElement()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 unsetSrcElement()
	 * @method bool hasSrcElement()
	 * @method bool isSrcElementFilled()
	 * @method bool isSrcElementChanged()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog fillSrcElement()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 set($fieldName, $value)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 reset($fieldName)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method mixed fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty61 wakeUp($data)
	 */
	class EO_IblockProperty61 extends \Bitrix\Main\ORM\Objectify\EntityObject {
		/* @var \Bitrix\Iblock\Elements\IblockProperty61Table */
		static public $dataClass = '\Bitrix\Iblock\Elements\IblockProperty61Table';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Iblock\Elements {
	/**
	 * EO_IblockProperty61_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getIdList()
	 * @method \int[] getIblockElementIdList()
	 * @method \int[] fillIblockElementId()
	 * @method \int[] getIblockPropertyIdList()
	 * @method \int[] fillIblockPropertyId()
	 * @method \int[] getValueList()
	 * @method \int[] fillValue()
	 * @method \Bitrix\Main\EO_File[] getFileList()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61_Collection getFileCollection()
	 * @method \Bitrix\Main\EO_File_Collection fillFile()
	 * @method \string[] getIblockGenericValueList()
	 * @method \string[] fillIblockGenericValue()
	 * @method \string[] getDescriptionList()
	 * @method \string[] fillDescription()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog[] getSrcElementList()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61_Collection getSrcElementCollection()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog_Collection fillSrcElement()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Bitrix\Iblock\Elements\EO_IblockProperty61 $object)
	 * @method bool has(\Bitrix\Iblock\Elements\EO_IblockProperty61 $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 getByPrimary($primary)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61[] getAll()
	 * @method bool remove(\Bitrix\Iblock\Elements\EO_IblockProperty61 $object)
	 * @method void removeByPrimary($primary)
	 * @method array|\Bitrix\Main\ORM\Objectify\Collection|null fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty61_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61_Collection merge(?\Bitrix\Iblock\Elements\EO_IblockProperty61_Collection $collection)
	 * @method bool isEmpty()
	 * @method array collectValues(int $valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, int $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL, bool $recursive = false)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61|null find(callable $callback)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61_Collection filter(callable $callback)
	 */
	class EO_IblockProperty61_Collection extends \Bitrix\Main\ORM\Objectify\Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Iblock\Elements\IblockProperty61Table */
		static public $dataClass = '\Bitrix\Iblock\Elements\IblockProperty61Table';
	}
}
namespace Bitrix\Iblock\Elements {
	/**
	 * @method static EO_IblockProperty61_Query query()
	 * @method static EO_IblockProperty61_Result getByPrimary($primary, array $parameters = [])
	 * @method static EO_IblockProperty61_Result getById($id)
	 * @method static EO_IblockProperty61_Result getList(array $parameters = [])
	 * @method static EO_IblockProperty61_Entity getEntity()
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty61 createObject($setDefaultValues = true)
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty61_Collection createCollection()
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty61 wakeUpObject($row)
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty61_Collection wakeUpCollection($rows)
	 */
	class IblockProperty61Table extends \Bitrix\Main\ORM\Data\DataManager {}
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_IblockProperty61_Result exec()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 fetchObject()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61_Collection fetchCollection()
	 */
	class EO_IblockProperty61_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 fetchObject()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61_Collection fetchCollection()
	 */
	class EO_IblockProperty61_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 createObject($setDefaultValues = true)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61_Collection createCollection()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61 wakeUpObject($row)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty61_Collection wakeUpCollection($rows)
	 */
	class EO_IblockProperty61_Entity extends \Bitrix\Main\ORM\Entity {}
}
/* ORMENTITYANNOTATION:Bitrix\Iblock\Elements\IblockProperty64Table */
namespace Bitrix\Iblock\Elements {
	/**
	 * EO_IblockProperty64
	 * @see \Bitrix\Iblock\Elements\IblockProperty64Table
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64 setId(\int|\Bitrix\Main\DB\SqlExpression $id)
	 * @method bool hasId()
	 * @method bool isIdFilled()
	 * @method bool isIdChanged()
	 * @method \int getIblockElementId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64 setIblockElementId(\int|\Bitrix\Main\DB\SqlExpression $iblockElementId)
	 * @method bool hasIblockElementId()
	 * @method bool isIblockElementIdFilled()
	 * @method bool isIblockElementIdChanged()
	 * @method \int remindActualIblockElementId()
	 * @method \int requireIblockElementId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64 resetIblockElementId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64 unsetIblockElementId()
	 * @method \int fillIblockElementId()
	 * @method \int getIblockPropertyId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64 setIblockPropertyId(\int|\Bitrix\Main\DB\SqlExpression $iblockPropertyId)
	 * @method bool hasIblockPropertyId()
	 * @method bool isIblockPropertyIdFilled()
	 * @method bool isIblockPropertyIdChanged()
	 * @method \int remindActualIblockPropertyId()
	 * @method \int requireIblockPropertyId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64 resetIblockPropertyId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64 unsetIblockPropertyId()
	 * @method \int fillIblockPropertyId()
	 * @method \string getValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64 setValue(\string|\Bitrix\Main\DB\SqlExpression $value)
	 * @method bool hasValue()
	 * @method bool isValueFilled()
	 * @method bool isValueChanged()
	 * @method \string remindActualValue()
	 * @method \string requireValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64 resetValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64 unsetValue()
	 * @method \string fillValue()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog getSrcElement()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog remindActualSrcElement()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog requireSrcElement()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64 setSrcElement(\Bitrix\Iblock\Elements\EO_ElementCatalog $object)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64 resetSrcElement()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64 unsetSrcElement()
	 * @method bool hasSrcElement()
	 * @method bool isSrcElementFilled()
	 * @method bool isSrcElementChanged()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog fillSrcElement()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64 set($fieldName, $value)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64 reset($fieldName)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64 unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method mixed fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty64 wakeUp($data)
	 */
	class EO_IblockProperty64 extends \Bitrix\Main\ORM\Objectify\EntityObject {
		/* @var \Bitrix\Iblock\Elements\IblockProperty64Table */
		static public $dataClass = '\Bitrix\Iblock\Elements\IblockProperty64Table';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Iblock\Elements {
	/**
	 * EO_IblockProperty64_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getIdList()
	 * @method \int[] getIblockElementIdList()
	 * @method \int[] fillIblockElementId()
	 * @method \int[] getIblockPropertyIdList()
	 * @method \int[] fillIblockPropertyId()
	 * @method \string[] getValueList()
	 * @method \string[] fillValue()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog[] getSrcElementList()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64_Collection getSrcElementCollection()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog_Collection fillSrcElement()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Bitrix\Iblock\Elements\EO_IblockProperty64 $object)
	 * @method bool has(\Bitrix\Iblock\Elements\EO_IblockProperty64 $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64 getByPrimary($primary)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64[] getAll()
	 * @method bool remove(\Bitrix\Iblock\Elements\EO_IblockProperty64 $object)
	 * @method void removeByPrimary($primary)
	 * @method array|\Bitrix\Main\ORM\Objectify\Collection|null fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty64_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64 current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64_Collection merge(?\Bitrix\Iblock\Elements\EO_IblockProperty64_Collection $collection)
	 * @method bool isEmpty()
	 * @method array collectValues(int $valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, int $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL, bool $recursive = false)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64|null find(callable $callback)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64_Collection filter(callable $callback)
	 */
	class EO_IblockProperty64_Collection extends \Bitrix\Main\ORM\Objectify\Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Iblock\Elements\IblockProperty64Table */
		static public $dataClass = '\Bitrix\Iblock\Elements\IblockProperty64Table';
	}
}
namespace Bitrix\Iblock\Elements {
	/**
	 * @method static EO_IblockProperty64_Query query()
	 * @method static EO_IblockProperty64_Result getByPrimary($primary, array $parameters = [])
	 * @method static EO_IblockProperty64_Result getById($id)
	 * @method static EO_IblockProperty64_Result getList(array $parameters = [])
	 * @method static EO_IblockProperty64_Entity getEntity()
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty64 createObject($setDefaultValues = true)
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty64_Collection createCollection()
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty64 wakeUpObject($row)
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty64_Collection wakeUpCollection($rows)
	 */
	class IblockProperty64Table extends \Bitrix\Main\ORM\Data\DataManager {}
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_IblockProperty64_Result exec()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64 fetchObject()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64_Collection fetchCollection()
	 */
	class EO_IblockProperty64_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64 fetchObject()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64_Collection fetchCollection()
	 */
	class EO_IblockProperty64_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64 createObject($setDefaultValues = true)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64_Collection createCollection()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64 wakeUpObject($row)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty64_Collection wakeUpCollection($rows)
	 */
	class EO_IblockProperty64_Entity extends \Bitrix\Main\ORM\Entity {}
}
/* ORMENTITYANNOTATION:Bitrix\Iblock\Elements\IblockProperty65Table */
namespace Bitrix\Iblock\Elements {
	/**
	 * EO_IblockProperty65
	 * @see \Bitrix\Iblock\Elements\IblockProperty65Table
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65 setId(\int|\Bitrix\Main\DB\SqlExpression $id)
	 * @method bool hasId()
	 * @method bool isIdFilled()
	 * @method bool isIdChanged()
	 * @method \int getIblockElementId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65 setIblockElementId(\int|\Bitrix\Main\DB\SqlExpression $iblockElementId)
	 * @method bool hasIblockElementId()
	 * @method bool isIblockElementIdFilled()
	 * @method bool isIblockElementIdChanged()
	 * @method \int remindActualIblockElementId()
	 * @method \int requireIblockElementId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65 resetIblockElementId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65 unsetIblockElementId()
	 * @method \int fillIblockElementId()
	 * @method \int getIblockPropertyId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65 setIblockPropertyId(\int|\Bitrix\Main\DB\SqlExpression $iblockPropertyId)
	 * @method bool hasIblockPropertyId()
	 * @method bool isIblockPropertyIdFilled()
	 * @method bool isIblockPropertyIdChanged()
	 * @method \int remindActualIblockPropertyId()
	 * @method \int requireIblockPropertyId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65 resetIblockPropertyId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65 unsetIblockPropertyId()
	 * @method \int fillIblockPropertyId()
	 * @method \string getValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65 setValue(\string|\Bitrix\Main\DB\SqlExpression $value)
	 * @method bool hasValue()
	 * @method bool isValueFilled()
	 * @method bool isValueChanged()
	 * @method \string remindActualValue()
	 * @method \string requireValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65 resetValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65 unsetValue()
	 * @method \string fillValue()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65 set($fieldName, $value)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65 reset($fieldName)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65 unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method mixed fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty65 wakeUp($data)
	 */
	class EO_IblockProperty65 extends \Bitrix\Main\ORM\Objectify\EntityObject {
		/* @var \Bitrix\Iblock\Elements\IblockProperty65Table */
		static public $dataClass = '\Bitrix\Iblock\Elements\IblockProperty65Table';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Iblock\Elements {
	/**
	 * EO_IblockProperty65_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getIdList()
	 * @method \int[] getIblockElementIdList()
	 * @method \int[] fillIblockElementId()
	 * @method \int[] getIblockPropertyIdList()
	 * @method \int[] fillIblockPropertyId()
	 * @method \string[] getValueList()
	 * @method \string[] fillValue()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Bitrix\Iblock\Elements\EO_IblockProperty65 $object)
	 * @method bool has(\Bitrix\Iblock\Elements\EO_IblockProperty65 $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65 getByPrimary($primary)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65[] getAll()
	 * @method bool remove(\Bitrix\Iblock\Elements\EO_IblockProperty65 $object)
	 * @method void removeByPrimary($primary)
	 * @method array|\Bitrix\Main\ORM\Objectify\Collection|null fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty65_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65 current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65_Collection merge(?\Bitrix\Iblock\Elements\EO_IblockProperty65_Collection $collection)
	 * @method bool isEmpty()
	 * @method array collectValues(int $valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, int $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL, bool $recursive = false)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65|null find(callable $callback)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65_Collection filter(callable $callback)
	 */
	class EO_IblockProperty65_Collection extends \Bitrix\Main\ORM\Objectify\Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Iblock\Elements\IblockProperty65Table */
		static public $dataClass = '\Bitrix\Iblock\Elements\IblockProperty65Table';
	}
}
namespace Bitrix\Iblock\Elements {
	/**
	 * @method static EO_IblockProperty65_Query query()
	 * @method static EO_IblockProperty65_Result getByPrimary($primary, array $parameters = [])
	 * @method static EO_IblockProperty65_Result getById($id)
	 * @method static EO_IblockProperty65_Result getList(array $parameters = [])
	 * @method static EO_IblockProperty65_Entity getEntity()
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty65 createObject($setDefaultValues = true)
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty65_Collection createCollection()
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty65 wakeUpObject($row)
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty65_Collection wakeUpCollection($rows)
	 */
	class IblockProperty65Table extends \Bitrix\Main\ORM\Data\DataManager {}
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_IblockProperty65_Result exec()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65 fetchObject()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65_Collection fetchCollection()
	 */
	class EO_IblockProperty65_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65 fetchObject()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65_Collection fetchCollection()
	 */
	class EO_IblockProperty65_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65 createObject($setDefaultValues = true)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65_Collection createCollection()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65 wakeUpObject($row)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty65_Collection wakeUpCollection($rows)
	 */
	class EO_IblockProperty65_Entity extends \Bitrix\Main\ORM\Entity {}
}
/* ORMENTITYANNOTATION:Bitrix\Iblock\Elements\IblockProperty66Table */
namespace Bitrix\Iblock\Elements {
	/**
	 * EO_IblockProperty66
	 * @see \Bitrix\Iblock\Elements\IblockProperty66Table
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66 setId(\int|\Bitrix\Main\DB\SqlExpression $id)
	 * @method bool hasId()
	 * @method bool isIdFilled()
	 * @method bool isIdChanged()
	 * @method \int getIblockElementId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66 setIblockElementId(\int|\Bitrix\Main\DB\SqlExpression $iblockElementId)
	 * @method bool hasIblockElementId()
	 * @method bool isIblockElementIdFilled()
	 * @method bool isIblockElementIdChanged()
	 * @method \int remindActualIblockElementId()
	 * @method \int requireIblockElementId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66 resetIblockElementId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66 unsetIblockElementId()
	 * @method \int fillIblockElementId()
	 * @method \int getIblockPropertyId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66 setIblockPropertyId(\int|\Bitrix\Main\DB\SqlExpression $iblockPropertyId)
	 * @method bool hasIblockPropertyId()
	 * @method bool isIblockPropertyIdFilled()
	 * @method bool isIblockPropertyIdChanged()
	 * @method \int remindActualIblockPropertyId()
	 * @method \int requireIblockPropertyId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66 resetIblockPropertyId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66 unsetIblockPropertyId()
	 * @method \int fillIblockPropertyId()
	 * @method \float getValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66 setValue(\float|\Bitrix\Main\DB\SqlExpression $value)
	 * @method bool hasValue()
	 * @method bool isValueFilled()
	 * @method bool isValueChanged()
	 * @method \float remindActualValue()
	 * @method \float requireValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66 resetValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66 unsetValue()
	 * @method \float fillValue()
	 * @method \string getIblockGenericValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66 setIblockGenericValue(\string|\Bitrix\Main\DB\SqlExpression $iblockGenericValue)
	 * @method bool hasIblockGenericValue()
	 * @method bool isIblockGenericValueFilled()
	 * @method bool isIblockGenericValueChanged()
	 * @method \string remindActualIblockGenericValue()
	 * @method \string requireIblockGenericValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66 resetIblockGenericValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66 unsetIblockGenericValue()
	 * @method \string fillIblockGenericValue()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66 set($fieldName, $value)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66 reset($fieldName)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66 unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method mixed fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty66 wakeUp($data)
	 */
	class EO_IblockProperty66 extends \Bitrix\Main\ORM\Objectify\EntityObject {
		/* @var \Bitrix\Iblock\Elements\IblockProperty66Table */
		static public $dataClass = '\Bitrix\Iblock\Elements\IblockProperty66Table';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Iblock\Elements {
	/**
	 * EO_IblockProperty66_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getIdList()
	 * @method \int[] getIblockElementIdList()
	 * @method \int[] fillIblockElementId()
	 * @method \int[] getIblockPropertyIdList()
	 * @method \int[] fillIblockPropertyId()
	 * @method \float[] getValueList()
	 * @method \float[] fillValue()
	 * @method \string[] getIblockGenericValueList()
	 * @method \string[] fillIblockGenericValue()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Bitrix\Iblock\Elements\EO_IblockProperty66 $object)
	 * @method bool has(\Bitrix\Iblock\Elements\EO_IblockProperty66 $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66 getByPrimary($primary)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66[] getAll()
	 * @method bool remove(\Bitrix\Iblock\Elements\EO_IblockProperty66 $object)
	 * @method void removeByPrimary($primary)
	 * @method array|\Bitrix\Main\ORM\Objectify\Collection|null fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty66_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66 current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66_Collection merge(?\Bitrix\Iblock\Elements\EO_IblockProperty66_Collection $collection)
	 * @method bool isEmpty()
	 * @method array collectValues(int $valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, int $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL, bool $recursive = false)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66|null find(callable $callback)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66_Collection filter(callable $callback)
	 */
	class EO_IblockProperty66_Collection extends \Bitrix\Main\ORM\Objectify\Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Iblock\Elements\IblockProperty66Table */
		static public $dataClass = '\Bitrix\Iblock\Elements\IblockProperty66Table';
	}
}
namespace Bitrix\Iblock\Elements {
	/**
	 * @method static EO_IblockProperty66_Query query()
	 * @method static EO_IblockProperty66_Result getByPrimary($primary, array $parameters = [])
	 * @method static EO_IblockProperty66_Result getById($id)
	 * @method static EO_IblockProperty66_Result getList(array $parameters = [])
	 * @method static EO_IblockProperty66_Entity getEntity()
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty66 createObject($setDefaultValues = true)
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty66_Collection createCollection()
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty66 wakeUpObject($row)
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty66_Collection wakeUpCollection($rows)
	 */
	class IblockProperty66Table extends \Bitrix\Main\ORM\Data\DataManager {}
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_IblockProperty66_Result exec()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66 fetchObject()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66_Collection fetchCollection()
	 */
	class EO_IblockProperty66_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66 fetchObject()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66_Collection fetchCollection()
	 */
	class EO_IblockProperty66_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66 createObject($setDefaultValues = true)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66_Collection createCollection()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66 wakeUpObject($row)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty66_Collection wakeUpCollection($rows)
	 */
	class EO_IblockProperty66_Entity extends \Bitrix\Main\ORM\Entity {}
}
/* ORMENTITYANNOTATION:Bitrix\Iblock\Elements\IblockProperty67Table */
namespace Bitrix\Iblock\Elements {
	/**
	 * EO_IblockProperty67
	 * @see \Bitrix\Iblock\Elements\IblockProperty67Table
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 setId(\int|\Bitrix\Main\DB\SqlExpression $id)
	 * @method bool hasId()
	 * @method bool isIdFilled()
	 * @method bool isIdChanged()
	 * @method \int getIblockElementId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 setIblockElementId(\int|\Bitrix\Main\DB\SqlExpression $iblockElementId)
	 * @method bool hasIblockElementId()
	 * @method bool isIblockElementIdFilled()
	 * @method bool isIblockElementIdChanged()
	 * @method \int remindActualIblockElementId()
	 * @method \int requireIblockElementId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 resetIblockElementId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 unsetIblockElementId()
	 * @method \int fillIblockElementId()
	 * @method \int getIblockPropertyId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 setIblockPropertyId(\int|\Bitrix\Main\DB\SqlExpression $iblockPropertyId)
	 * @method bool hasIblockPropertyId()
	 * @method bool isIblockPropertyIdFilled()
	 * @method bool isIblockPropertyIdChanged()
	 * @method \int remindActualIblockPropertyId()
	 * @method \int requireIblockPropertyId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 resetIblockPropertyId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 unsetIblockPropertyId()
	 * @method \int fillIblockPropertyId()
	 * @method \int getValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 setValue(\int|\Bitrix\Main\DB\SqlExpression $value)
	 * @method bool hasValue()
	 * @method bool isValueFilled()
	 * @method bool isValueChanged()
	 * @method \int remindActualValue()
	 * @method \int requireValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 resetValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 unsetValue()
	 * @method \int fillValue()
	 * @method \Bitrix\Iblock\EO_PropertyEnumeration getItem()
	 * @method \Bitrix\Iblock\EO_PropertyEnumeration remindActualItem()
	 * @method \Bitrix\Iblock\EO_PropertyEnumeration requireItem()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 setItem(\Bitrix\Iblock\EO_PropertyEnumeration $object)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 resetItem()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 unsetItem()
	 * @method bool hasItem()
	 * @method bool isItemFilled()
	 * @method bool isItemChanged()
	 * @method \Bitrix\Iblock\EO_PropertyEnumeration fillItem()
	 * @method \string getIblockGenericValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 setIblockGenericValue(\string|\Bitrix\Main\DB\SqlExpression $iblockGenericValue)
	 * @method bool hasIblockGenericValue()
	 * @method bool isIblockGenericValueFilled()
	 * @method bool isIblockGenericValueChanged()
	 * @method \string remindActualIblockGenericValue()
	 * @method \string requireIblockGenericValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 resetIblockGenericValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 unsetIblockGenericValue()
	 * @method \string fillIblockGenericValue()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 set($fieldName, $value)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 reset($fieldName)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method mixed fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty67 wakeUp($data)
	 */
	class EO_IblockProperty67 extends \Bitrix\Main\ORM\Objectify\EntityObject {
		/* @var \Bitrix\Iblock\Elements\IblockProperty67Table */
		static public $dataClass = '\Bitrix\Iblock\Elements\IblockProperty67Table';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Iblock\Elements {
	/**
	 * EO_IblockProperty67_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getIdList()
	 * @method \int[] getIblockElementIdList()
	 * @method \int[] fillIblockElementId()
	 * @method \int[] getIblockPropertyIdList()
	 * @method \int[] fillIblockPropertyId()
	 * @method \int[] getValueList()
	 * @method \int[] fillValue()
	 * @method \Bitrix\Iblock\EO_PropertyEnumeration[] getItemList()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67_Collection getItemCollection()
	 * @method \Bitrix\Iblock\EO_PropertyEnumeration_Collection fillItem()
	 * @method \string[] getIblockGenericValueList()
	 * @method \string[] fillIblockGenericValue()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Bitrix\Iblock\Elements\EO_IblockProperty67 $object)
	 * @method bool has(\Bitrix\Iblock\Elements\EO_IblockProperty67 $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 getByPrimary($primary)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67[] getAll()
	 * @method bool remove(\Bitrix\Iblock\Elements\EO_IblockProperty67 $object)
	 * @method void removeByPrimary($primary)
	 * @method array|\Bitrix\Main\ORM\Objectify\Collection|null fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty67_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67_Collection merge(?\Bitrix\Iblock\Elements\EO_IblockProperty67_Collection $collection)
	 * @method bool isEmpty()
	 * @method array collectValues(int $valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, int $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL, bool $recursive = false)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67|null find(callable $callback)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67_Collection filter(callable $callback)
	 */
	class EO_IblockProperty67_Collection extends \Bitrix\Main\ORM\Objectify\Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Iblock\Elements\IblockProperty67Table */
		static public $dataClass = '\Bitrix\Iblock\Elements\IblockProperty67Table';
	}
}
namespace Bitrix\Iblock\Elements {
	/**
	 * @method static EO_IblockProperty67_Query query()
	 * @method static EO_IblockProperty67_Result getByPrimary($primary, array $parameters = [])
	 * @method static EO_IblockProperty67_Result getById($id)
	 * @method static EO_IblockProperty67_Result getList(array $parameters = [])
	 * @method static EO_IblockProperty67_Entity getEntity()
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty67 createObject($setDefaultValues = true)
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty67_Collection createCollection()
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty67 wakeUpObject($row)
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty67_Collection wakeUpCollection($rows)
	 */
	class IblockProperty67Table extends \Bitrix\Main\ORM\Data\DataManager {}
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_IblockProperty67_Result exec()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 fetchObject()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67_Collection fetchCollection()
	 */
	class EO_IblockProperty67_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 fetchObject()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67_Collection fetchCollection()
	 */
	class EO_IblockProperty67_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 createObject($setDefaultValues = true)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67_Collection createCollection()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67 wakeUpObject($row)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty67_Collection wakeUpCollection($rows)
	 */
	class EO_IblockProperty67_Entity extends \Bitrix\Main\ORM\Entity {}
}
/* ORMENTITYANNOTATION:Bitrix\Iblock\Elements\IblockProperty68Table */
namespace Bitrix\Iblock\Elements {
	/**
	 * EO_IblockProperty68
	 * @see \Bitrix\Iblock\Elements\IblockProperty68Table
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int getId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 setId(\int|\Bitrix\Main\DB\SqlExpression $id)
	 * @method bool hasId()
	 * @method bool isIdFilled()
	 * @method bool isIdChanged()
	 * @method \int getIblockElementId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 setIblockElementId(\int|\Bitrix\Main\DB\SqlExpression $iblockElementId)
	 * @method bool hasIblockElementId()
	 * @method bool isIblockElementIdFilled()
	 * @method bool isIblockElementIdChanged()
	 * @method \int remindActualIblockElementId()
	 * @method \int requireIblockElementId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 resetIblockElementId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 unsetIblockElementId()
	 * @method \int fillIblockElementId()
	 * @method \int getIblockPropertyId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 setIblockPropertyId(\int|\Bitrix\Main\DB\SqlExpression $iblockPropertyId)
	 * @method bool hasIblockPropertyId()
	 * @method bool isIblockPropertyIdFilled()
	 * @method bool isIblockPropertyIdChanged()
	 * @method \int remindActualIblockPropertyId()
	 * @method \int requireIblockPropertyId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 resetIblockPropertyId()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 unsetIblockPropertyId()
	 * @method \int fillIblockPropertyId()
	 * @method \int getValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 setValue(\int|\Bitrix\Main\DB\SqlExpression $value)
	 * @method bool hasValue()
	 * @method bool isValueFilled()
	 * @method bool isValueChanged()
	 * @method \int remindActualValue()
	 * @method \int requireValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 resetValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 unsetValue()
	 * @method \int fillValue()
	 * @method \Bitrix\Iblock\EO_PropertyEnumeration getItem()
	 * @method \Bitrix\Iblock\EO_PropertyEnumeration remindActualItem()
	 * @method \Bitrix\Iblock\EO_PropertyEnumeration requireItem()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 setItem(\Bitrix\Iblock\EO_PropertyEnumeration $object)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 resetItem()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 unsetItem()
	 * @method bool hasItem()
	 * @method bool isItemFilled()
	 * @method bool isItemChanged()
	 * @method \Bitrix\Iblock\EO_PropertyEnumeration fillItem()
	 * @method \string getIblockGenericValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 setIblockGenericValue(\string|\Bitrix\Main\DB\SqlExpression $iblockGenericValue)
	 * @method bool hasIblockGenericValue()
	 * @method bool isIblockGenericValueFilled()
	 * @method bool isIblockGenericValueChanged()
	 * @method \string remindActualIblockGenericValue()
	 * @method \string requireIblockGenericValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 resetIblockGenericValue()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 unsetIblockGenericValue()
	 * @method \string fillIblockGenericValue()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog getSrcElement()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog remindActualSrcElement()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog requireSrcElement()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 setSrcElement(\Bitrix\Iblock\Elements\EO_ElementCatalog $object)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 resetSrcElement()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 unsetSrcElement()
	 * @method bool hasSrcElement()
	 * @method bool isSrcElementFilled()
	 * @method bool isSrcElementChanged()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog fillSrcElement()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 set($fieldName, $value)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 reset($fieldName)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method mixed fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty68 wakeUp($data)
	 */
	class EO_IblockProperty68 extends \Bitrix\Main\ORM\Objectify\EntityObject {
		/* @var \Bitrix\Iblock\Elements\IblockProperty68Table */
		static public $dataClass = '\Bitrix\Iblock\Elements\IblockProperty68Table';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Bitrix\Iblock\Elements {
	/**
	 * EO_IblockProperty68_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \int[] getIdList()
	 * @method \int[] getIblockElementIdList()
	 * @method \int[] fillIblockElementId()
	 * @method \int[] getIblockPropertyIdList()
	 * @method \int[] fillIblockPropertyId()
	 * @method \int[] getValueList()
	 * @method \int[] fillValue()
	 * @method \Bitrix\Iblock\EO_PropertyEnumeration[] getItemList()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68_Collection getItemCollection()
	 * @method \Bitrix\Iblock\EO_PropertyEnumeration_Collection fillItem()
	 * @method \string[] getIblockGenericValueList()
	 * @method \string[] fillIblockGenericValue()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog[] getSrcElementList()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68_Collection getSrcElementCollection()
	 * @method \Bitrix\Iblock\Elements\EO_ElementCatalog_Collection fillSrcElement()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Bitrix\Iblock\Elements\EO_IblockProperty68 $object)
	 * @method bool has(\Bitrix\Iblock\Elements\EO_IblockProperty68 $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 getByPrimary($primary)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68[] getAll()
	 * @method bool remove(\Bitrix\Iblock\Elements\EO_IblockProperty68 $object)
	 * @method void removeByPrimary($primary)
	 * @method array|\Bitrix\Main\ORM\Objectify\Collection|null fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty68_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68_Collection merge(?\Bitrix\Iblock\Elements\EO_IblockProperty68_Collection $collection)
	 * @method bool isEmpty()
	 * @method array collectValues(int $valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, int $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL, bool $recursive = false)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68|null find(callable $callback)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68_Collection filter(callable $callback)
	 */
	class EO_IblockProperty68_Collection extends \Bitrix\Main\ORM\Objectify\Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Bitrix\Iblock\Elements\IblockProperty68Table */
		static public $dataClass = '\Bitrix\Iblock\Elements\IblockProperty68Table';
	}
}
namespace Bitrix\Iblock\Elements {
	/**
	 * @method static EO_IblockProperty68_Query query()
	 * @method static EO_IblockProperty68_Result getByPrimary($primary, array $parameters = [])
	 * @method static EO_IblockProperty68_Result getById($id)
	 * @method static EO_IblockProperty68_Result getList(array $parameters = [])
	 * @method static EO_IblockProperty68_Entity getEntity()
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty68 createObject($setDefaultValues = true)
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty68_Collection createCollection()
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty68 wakeUpObject($row)
	 * @method static \Bitrix\Iblock\Elements\EO_IblockProperty68_Collection wakeUpCollection($rows)
	 */
	class IblockProperty68Table extends \Bitrix\Main\ORM\Data\DataManager {}
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_IblockProperty68_Result exec()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 fetchObject()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68_Collection fetchCollection()
	 */
	class EO_IblockProperty68_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 fetchObject()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68_Collection fetchCollection()
	 */
	class EO_IblockProperty68_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 createObject($setDefaultValues = true)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68_Collection createCollection()
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68 wakeUpObject($row)
	 * @method \Bitrix\Iblock\Elements\EO_IblockProperty68_Collection wakeUpCollection($rows)
	 */
	class EO_IblockProperty68_Entity extends \Bitrix\Main\ORM\Entity {}
}