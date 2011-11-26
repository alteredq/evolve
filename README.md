Image evolution
===============

A [simulated annealing](http://en.wikipedia.org/wiki/Simulated_Annealing) like optimization algorithm, a reimplementation of [Roger Alsing's excellent idea](http://rogeralsing.com/2008/12/07/genetic-programming-evolution-of-mona-lisa/).

The goal is to get an image represented as a collection of overlapping polygons of various colors and transparencies.
We start from random 50 polygons that are invisible. In each optimization step we randomly modify one parameter (like color components or polygon vertices) and check whether such new variant looks more like the original image. If it is, we keep it, and continue to mutate this one instead.

Displayed fitness is a percentage of how close the new image is to the original one (1-current difference/maximum difference). The best possible is 100%. This new fitness is normalized so that it's easier to compare different images and different sizes.