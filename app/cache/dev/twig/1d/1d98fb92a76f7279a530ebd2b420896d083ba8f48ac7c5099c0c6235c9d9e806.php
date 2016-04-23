<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_35be830cce3d55a90bfabeff7424c385f6774fa7aa27e9552e4f4b7f3560dc3d extends Twig_Template
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
        $__internal_4773f7568e4376e03311f4f00c03b8c3e834a27bfa77fc13e55cae290a5e6b36 = $this->env->getExtension("native_profiler");
        $__internal_4773f7568e4376e03311f4f00c03b8c3e834a27bfa77fc13e55cae290a5e6b36->enter($__internal_4773f7568e4376e03311f4f00c03b8c3e834a27bfa77fc13e55cae290a5e6b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_4773f7568e4376e03311f4f00c03b8c3e834a27bfa77fc13e55cae290a5e6b36->leave($__internal_4773f7568e4376e03311f4f00c03b8c3e834a27bfa77fc13e55cae290a5e6b36_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
