<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_11d8e63dcd5465d5297b89ed9592823a9d74a1ee1651fea55f9254070c72f8a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fc78a8a2b1f554e19b6f0e19808acaef870e500a7d8bad4d46f13e9292aa234 = $this->env->getExtension("native_profiler");
        $__internal_0fc78a8a2b1f554e19b6f0e19808acaef870e500a7d8bad4d46f13e9292aa234->enter($__internal_0fc78a8a2b1f554e19b6f0e19808acaef870e500a7d8bad4d46f13e9292aa234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fc78a8a2b1f554e19b6f0e19808acaef870e500a7d8bad4d46f13e9292aa234->leave($__internal_0fc78a8a2b1f554e19b6f0e19808acaef870e500a7d8bad4d46f13e9292aa234_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f8c9656ddbe5feb5e5b05e5dd9b4651c01e731db6e6e2c03102f44e1a3227f84 = $this->env->getExtension("native_profiler");
        $__internal_f8c9656ddbe5feb5e5b05e5dd9b4651c01e731db6e6e2c03102f44e1a3227f84->enter($__internal_f8c9656ddbe5feb5e5b05e5dd9b4651c01e731db6e6e2c03102f44e1a3227f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f8c9656ddbe5feb5e5b05e5dd9b4651c01e731db6e6e2c03102f44e1a3227f84->leave($__internal_f8c9656ddbe5feb5e5b05e5dd9b4651c01e731db6e6e2c03102f44e1a3227f84_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5582037b9078465c238d13eab15f542e317ebbfd7fb549c88d9cae4b0b6ac445 = $this->env->getExtension("native_profiler");
        $__internal_5582037b9078465c238d13eab15f542e317ebbfd7fb549c88d9cae4b0b6ac445->enter($__internal_5582037b9078465c238d13eab15f542e317ebbfd7fb549c88d9cae4b0b6ac445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5582037b9078465c238d13eab15f542e317ebbfd7fb549c88d9cae4b0b6ac445->leave($__internal_5582037b9078465c238d13eab15f542e317ebbfd7fb549c88d9cae4b0b6ac445_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_eeb651a460bb49269fcaa90c69928b2fce7aaeccebdc9c2f6a0b2456d051123a = $this->env->getExtension("native_profiler");
        $__internal_eeb651a460bb49269fcaa90c69928b2fce7aaeccebdc9c2f6a0b2456d051123a->enter($__internal_eeb651a460bb49269fcaa90c69928b2fce7aaeccebdc9c2f6a0b2456d051123a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_eeb651a460bb49269fcaa90c69928b2fce7aaeccebdc9c2f6a0b2456d051123a->leave($__internal_eeb651a460bb49269fcaa90c69928b2fce7aaeccebdc9c2f6a0b2456d051123a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
