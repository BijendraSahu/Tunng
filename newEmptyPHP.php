In this paper, we have proposed a fast and high-performance
SR method for compressed web images. In the learning stage,
we rstly reduce the compression artifacts via BM3D lter.
Then we classify different local patches into many classes
by means of a local encoding process. A mapping function
from LQ and LR space to HQ and HR space is then computed
for each class. In the reconstructing stage, a LR input
patch is also ltered and encoded to obtain its local code.
Corresponding mapping function is then directly selected to
magnify this LR patch. Furthermore, we have also introduced
a simple cascade framework and a post-processing for larger
magnication factors. Experimental results on several realworld
web images demonstrate that the proposed method can
efciently recover sharp and artifact-free SR results.