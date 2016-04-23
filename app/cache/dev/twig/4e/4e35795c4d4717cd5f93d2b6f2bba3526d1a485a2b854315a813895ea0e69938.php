<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_650135f6cab9b5bfecbbe6d4129e40e7572fa1840dce13b737b820a92ef75cf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9265bd5844d774b8e856f7a92240b3d899be10b03f49615f5315207c9335843 = $this->env->getExtension("native_profiler");
        $__internal_a9265bd5844d774b8e856f7a92240b3d899be10b03f49615f5315207c9335843->enter($__internal_a9265bd5844d774b8e856f7a92240b3d899be10b03f49615f5315207c9335843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_a9265bd5844d774b8e856f7a92240b3d899be10b03f49615f5315207c9335843->leave($__internal_a9265bd5844d774b8e856f7a92240b3d899be10b03f49615f5315207c9335843_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
