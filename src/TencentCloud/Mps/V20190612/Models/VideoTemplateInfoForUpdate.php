<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频流配置参数
 *
 * @method string getCodec() 获取视频流的编码格式，可选值：
<li>h264：H.264 编码</li>
<li>h265：H.265 编码</li>
<li>h266：H.266 编码</li>
<li>av1：AOMedia Video 1 编码</li>
<li>vp8：VP8 编码</li>
<li>vp9：VP9 编码</li>
<li>mpeg2：MPEG2 编码</li>
<li>dnxhd：DNxHD 编码</li>
注意：目前 H.265 编码必须指定分辨率，并且需要在 640*480 以内。

注意：av1 编码容器目前只支持 mp4 ，webm，mkv，mov。
注意：H.266 编码容器目前只支持 mp4 ，hls，ts，mov。
注意：VP8、VP9编码容器目前只支持webm，mkv。
注意：MPEG2、dnxhd 编码容器目前只支持mxf。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodec(string $Codec) 设置视频流的编码格式，可选值：
<li>h264：H.264 编码</li>
<li>h265：H.265 编码</li>
<li>h266：H.266 编码</li>
<li>av1：AOMedia Video 1 编码</li>
<li>vp8：VP8 编码</li>
<li>vp9：VP9 编码</li>
<li>mpeg2：MPEG2 编码</li>
<li>dnxhd：DNxHD 编码</li>
注意：目前 H.265 编码必须指定分辨率，并且需要在 640*480 以内。

注意：av1 编码容器目前只支持 mp4 ，webm，mkv，mov。
注意：H.266 编码容器目前只支持 mp4 ，hls，ts，mov。
注意：VP8、VP9编码容器目前只支持webm，mkv。
注意：MPEG2、dnxhd 编码容器目前只支持mxf。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFps() 获取视频帧率，取值范围：[0, 120]，单位：Hz。 当取值为 0，表示帧率和原始视频保持一致。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFps(integer $Fps) 设置视频帧率，取值范围：[0, 120]，单位：Hz。 当取值为 0，表示帧率和原始视频保持一致。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBitrate() 获取视频流的码率，取值范围：0 和 [128, 35000]，单位：kbps。
当取值为 0，表示视频码率和原始视频保持一致。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBitrate(integer $Bitrate) 设置视频流的码率，取值范围：0 和 [128, 35000]，单位：kbps。
当取值为 0，表示视频码率和原始视频保持一致。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResolutionAdaptive() 获取分辨率自适应，可选值：
<li>open：开启，此时，Width 代表视频的长边，Height 表示视频的短边；</li>
<li>close：关闭，此时，Width 代表视频的宽度，Height 表示视频的高度。</li>
注意：自适应模式时，Width不能小于Height。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) 设置分辨率自适应，可选值：
<li>open：开启，此时，Width 代表视频的长边，Height 表示视频的短边；</li>
<li>close：关闭，此时，Width 代表视频的宽度，Height 表示视频的高度。</li>
注意：自适应模式时，Width不能小于Height。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWidth() 获取视频流宽度（或长边）的最大值，取值范围：0 和 [128, 4096]，单位：px。
<li>当 Width、Height 均为 0，则分辨率同源；</li>
<li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li>
<li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li>
<li>当 Width、Height 均非 0，则分辨率按用户指定。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidth(integer $Width) 设置视频流宽度（或长边）的最大值，取值范围：0 和 [128, 4096]，单位：px。
<li>当 Width、Height 均为 0，则分辨率同源；</li>
<li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li>
<li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li>
<li>当 Width、Height 均非 0，则分辨率按用户指定。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHeight() 获取视频流高度（或短边）的最大值，取值范围：0 和 [128, 4096]，单位：px。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeight(integer $Height) 设置视频流高度（或短边）的最大值，取值范围：0 和 [128, 4096]，单位：px。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGop() 获取关键帧 I 帧之间的间隔，取值范围：0 和 [1, 100000]，单位：帧数。当填 0 时，系统将自动设置 gop 长度。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGop(integer $Gop) 设置关键帧 I 帧之间的间隔，取值范围：0 和 [1, 100000]，单位：帧数。当填 0 时，系统将自动设置 gop 长度。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFillType() 获取填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式：
<li> stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“；</li>
<li>black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。</li>
<li>white：留白，保持视频宽高比不变，边缘剩余部分使用白色填充。</li>
<li>gauss：高斯模糊，保持视频宽高比不变，边缘剩余部分使用高斯模糊填充。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFillType(string $FillType) 设置填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式：
<li> stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“；</li>
<li>black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。</li>
<li>white：留白，保持视频宽高比不变，边缘剩余部分使用白色填充。</li>
<li>gauss：高斯模糊，保持视频宽高比不变，边缘剩余部分使用高斯模糊填充。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVcrf() 获取视频恒定码率控制因子。取值范围为[0, 51]，填0表示禁用该参数。
如果没有特殊需求，不建议指定该参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVcrf(integer $Vcrf) 设置视频恒定码率控制因子。取值范围为[0, 51]，填0表示禁用该参数。
如果没有特殊需求，不建议指定该参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getContentAdaptStream() 获取内容自适应编码。可选值：
<li>0：不开启</li>
<li>1：开启</li>
默认值: 0.   当开启该参数时，将会自适应生成多个不同分辨率，不同码率的码流， 其中VideoTemplate的宽和高为多个码流中的最大分辨率，VideoTemplate中的码率为多个码流中的最高码率， VideoTemplate中的vcrf为多个码流中的最高质量。 当不设置分辨率、码率和vcrf时， ContentAdaptStream 参数生成的最高分辨率为视频源的分辨率，视频质量为接近vmaf95分。 若要开启该参数或了解计费细节, 请联系您的腾讯云商务。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContentAdaptStream(integer $ContentAdaptStream) 设置内容自适应编码。可选值：
<li>0：不开启</li>
<li>1：开启</li>
默认值: 0.   当开启该参数时，将会自适应生成多个不同分辨率，不同码率的码流， 其中VideoTemplate的宽和高为多个码流中的最大分辨率，VideoTemplate中的码率为多个码流中的最高码率， VideoTemplate中的vcrf为多个码流中的最高质量。 当不设置分辨率、码率和vcrf时， ContentAdaptStream 参数生成的最高分辨率为视频源的分辨率，视频质量为接近vmaf95分。 若要开启该参数或了解计费细节, 请联系您的腾讯云商务。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSegmentType() 获取hls 分片类型，可选值：
<li>6：HLS+TS 切片</li>
<li>2：HLS+TS byte range</li>
<li>7：HLS+MP4 切片</li>
<li>5：HLS+MP4 byte range</li>
默认值：6
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSegmentType(integer $SegmentType) 设置hls 分片类型，可选值：
<li>6：HLS+TS 切片</li>
<li>2：HLS+TS byte range</li>
<li>7：HLS+MP4 切片</li>
<li>5：HLS+MP4 byte range</li>
默认值：6
注意：此字段可能返回 null，表示取不到有效值。
 */
class VideoTemplateInfoForUpdate extends AbstractModel
{
    /**
     * @var string 视频流的编码格式，可选值：
<li>h264：H.264 编码</li>
<li>h265：H.265 编码</li>
<li>h266：H.266 编码</li>
<li>av1：AOMedia Video 1 编码</li>
<li>vp8：VP8 编码</li>
<li>vp9：VP9 编码</li>
<li>mpeg2：MPEG2 编码</li>
<li>dnxhd：DNxHD 编码</li>
注意：目前 H.265 编码必须指定分辨率，并且需要在 640*480 以内。

注意：av1 编码容器目前只支持 mp4 ，webm，mkv，mov。
注意：H.266 编码容器目前只支持 mp4 ，hls，ts，mov。
注意：VP8、VP9编码容器目前只支持webm，mkv。
注意：MPEG2、dnxhd 编码容器目前只支持mxf。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Codec;

    /**
     * @var integer 视频帧率，取值范围：[0, 120]，单位：Hz。 当取值为 0，表示帧率和原始视频保持一致。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Fps;

    /**
     * @var integer 视频流的码率，取值范围：0 和 [128, 35000]，单位：kbps。
当取值为 0，表示视频码率和原始视频保持一致。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bitrate;

    /**
     * @var string 分辨率自适应，可选值：
<li>open：开启，此时，Width 代表视频的长边，Height 表示视频的短边；</li>
<li>close：关闭，此时，Width 代表视频的宽度，Height 表示视频的高度。</li>
注意：自适应模式时，Width不能小于Height。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResolutionAdaptive;

    /**
     * @var integer 视频流宽度（或长边）的最大值，取值范围：0 和 [128, 4096]，单位：px。
<li>当 Width、Height 均为 0，则分辨率同源；</li>
<li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li>
<li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li>
<li>当 Width、Height 均非 0，则分辨率按用户指定。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Width;

    /**
     * @var integer 视频流高度（或短边）的最大值，取值范围：0 和 [128, 4096]，单位：px。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Height;

    /**
     * @var integer 关键帧 I 帧之间的间隔，取值范围：0 和 [1, 100000]，单位：帧数。当填 0 时，系统将自动设置 gop 长度。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Gop;

    /**
     * @var string 填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式：
<li> stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“；</li>
<li>black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。</li>
<li>white：留白，保持视频宽高比不变，边缘剩余部分使用白色填充。</li>
<li>gauss：高斯模糊，保持视频宽高比不变，边缘剩余部分使用高斯模糊填充。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FillType;

    /**
     * @var integer 视频恒定码率控制因子。取值范围为[0, 51]，填0表示禁用该参数。
如果没有特殊需求，不建议指定该参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vcrf;

    /**
     * @var integer 内容自适应编码。可选值：
<li>0：不开启</li>
<li>1：开启</li>
默认值: 0.   当开启该参数时，将会自适应生成多个不同分辨率，不同码率的码流， 其中VideoTemplate的宽和高为多个码流中的最大分辨率，VideoTemplate中的码率为多个码流中的最高码率， VideoTemplate中的vcrf为多个码流中的最高质量。 当不设置分辨率、码率和vcrf时， ContentAdaptStream 参数生成的最高分辨率为视频源的分辨率，视频质量为接近vmaf95分。 若要开启该参数或了解计费细节, 请联系您的腾讯云商务。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContentAdaptStream;

    /**
     * @var integer hls 分片类型，可选值：
<li>6：HLS+TS 切片</li>
<li>2：HLS+TS byte range</li>
<li>7：HLS+MP4 切片</li>
<li>5：HLS+MP4 byte range</li>
默认值：6
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SegmentType;

    /**
     * @param string $Codec 视频流的编码格式，可选值：
<li>h264：H.264 编码</li>
<li>h265：H.265 编码</li>
<li>h266：H.266 编码</li>
<li>av1：AOMedia Video 1 编码</li>
<li>vp8：VP8 编码</li>
<li>vp9：VP9 编码</li>
<li>mpeg2：MPEG2 编码</li>
<li>dnxhd：DNxHD 编码</li>
注意：目前 H.265 编码必须指定分辨率，并且需要在 640*480 以内。

注意：av1 编码容器目前只支持 mp4 ，webm，mkv，mov。
注意：H.266 编码容器目前只支持 mp4 ，hls，ts，mov。
注意：VP8、VP9编码容器目前只支持webm，mkv。
注意：MPEG2、dnxhd 编码容器目前只支持mxf。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Fps 视频帧率，取值范围：[0, 120]，单位：Hz。 当取值为 0，表示帧率和原始视频保持一致。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Bitrate 视频流的码率，取值范围：0 和 [128, 35000]，单位：kbps。
当取值为 0，表示视频码率和原始视频保持一致。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResolutionAdaptive 分辨率自适应，可选值：
<li>open：开启，此时，Width 代表视频的长边，Height 表示视频的短边；</li>
<li>close：关闭，此时，Width 代表视频的宽度，Height 表示视频的高度。</li>
注意：自适应模式时，Width不能小于Height。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Width 视频流宽度（或长边）的最大值，取值范围：0 和 [128, 4096]，单位：px。
<li>当 Width、Height 均为 0，则分辨率同源；</li>
<li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li>
<li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li>
<li>当 Width、Height 均非 0，则分辨率按用户指定。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Height 视频流高度（或短边）的最大值，取值范围：0 和 [128, 4096]，单位：px。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Gop 关键帧 I 帧之间的间隔，取值范围：0 和 [1, 100000]，单位：帧数。当填 0 时，系统将自动设置 gop 长度。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FillType 填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式：
<li> stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“；</li>
<li>black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。</li>
<li>white：留白，保持视频宽高比不变，边缘剩余部分使用白色填充。</li>
<li>gauss：高斯模糊，保持视频宽高比不变，边缘剩余部分使用高斯模糊填充。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Vcrf 视频恒定码率控制因子。取值范围为[0, 51]，填0表示禁用该参数。
如果没有特殊需求，不建议指定该参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ContentAdaptStream 内容自适应编码。可选值：
<li>0：不开启</li>
<li>1：开启</li>
默认值: 0.   当开启该参数时，将会自适应生成多个不同分辨率，不同码率的码流， 其中VideoTemplate的宽和高为多个码流中的最大分辨率，VideoTemplate中的码率为多个码流中的最高码率， VideoTemplate中的vcrf为多个码流中的最高质量。 当不设置分辨率、码率和vcrf时， ContentAdaptStream 参数生成的最高分辨率为视频源的分辨率，视频质量为接近vmaf95分。 若要开启该参数或了解计费细节, 请联系您的腾讯云商务。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SegmentType hls 分片类型，可选值：
<li>6：HLS+TS 切片</li>
<li>2：HLS+TS byte range</li>
<li>7：HLS+MP4 切片</li>
<li>5：HLS+MP4 byte range</li>
默认值：6
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("ResolutionAdaptive",$param) and $param["ResolutionAdaptive"] !== null) {
            $this->ResolutionAdaptive = $param["ResolutionAdaptive"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Gop",$param) and $param["Gop"] !== null) {
            $this->Gop = $param["Gop"];
        }

        if (array_key_exists("FillType",$param) and $param["FillType"] !== null) {
            $this->FillType = $param["FillType"];
        }

        if (array_key_exists("Vcrf",$param) and $param["Vcrf"] !== null) {
            $this->Vcrf = $param["Vcrf"];
        }

        if (array_key_exists("ContentAdaptStream",$param) and $param["ContentAdaptStream"] !== null) {
            $this->ContentAdaptStream = $param["ContentAdaptStream"];
        }

        if (array_key_exists("SegmentType",$param) and $param["SegmentType"] !== null) {
            $this->SegmentType = $param["SegmentType"];
        }
    }
}
