<?php

/* @HamsterHub/Default/index.html.twig */
class __TwigTemplate_bb2b19b5c8aac8bb32a9ded87b56adb5a537c06ef5c70a9287e0a05c2f80c4bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HamsterHubBundle:Base:index.html.twig", "@HamsterHub/Default/index.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HamsterHubBundle:Base:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c19b2dfc3c1566b9eae67447422e99ed190bb2d86511c4fa55153f1e6ea75ae = $this->env->getExtension("native_profiler");
        $__internal_8c19b2dfc3c1566b9eae67447422e99ed190bb2d86511c4fa55153f1e6ea75ae->enter($__internal_8c19b2dfc3c1566b9eae67447422e99ed190bb2d86511c4fa55153f1e6ea75ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c19b2dfc3c1566b9eae67447422e99ed190bb2d86511c4fa55153f1e6ea75ae->leave($__internal_8c19b2dfc3c1566b9eae67447422e99ed190bb2d86511c4fa55153f1e6ea75ae_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_37c683db12a0df80427d1bcf48980a964ccc39fde4ecfb1850ec7003a514d6d6 = $this->env->getExtension("native_profiler");
        $__internal_37c683db12a0df80427d1bcf48980a964ccc39fde4ecfb1850ec7003a514d6d6->enter($__internal_37c683db12a0df80427d1bcf48980a964ccc39fde4ecfb1850ec7003a514d6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : $this->getContext($context, "videos")));
        foreach ($context['_seq'] as $context["_key"] => $context["liens"]) {
            // line 6
            echo "  <div id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["liens"], "id", array()), "html", null, true);
            echo "\">
    <h1>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["liens"], "name", array()), "html", null, true);
            echo "</h1>
    de ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["liens"], "user", array()), "html", null, true);
            echo " le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["liens"], "date", array()), "d/m/Y"), "html", null, true);
            echo "<br>
    <iframe width=\"560\" height=\"315\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["liens"], "url", array()), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen></iframe><br>
    ";
            // line 10
            if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED") || $this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY"))) {
                // line 11
                echo "      ";
                if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || ($this->getAttribute($context["liens"], "user", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())))) {
                    // line 12
                    echo "        <form id=\"delete\" method=\"post\">
          <input type=\"hidden\" name=\"id\" value=\"";
                    // line 13
                    echo twig_escape_filter($this->env, $this->getAttribute($context["liens"], "id", array()), "html", null, true);
                    echo "\">
          <input type=\"submit\" name=\"delete\" value=\"Supprimer\">
        </form>
      ";
                }
                // line 17
                echo "    ";
            }
            // line 18
            echo "  </div><br><br>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liens'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED") || $this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 21
            echo "    <form id=\"upload\" method=\"post\">
        <input type=\"text\" name=\"name\"> NAME<br>
        <input type=\"text\" name=\"url\"> URL<br>
        <input type=\"submit\" name=\"formVideo\" value=\"Upload\">
    </form>
";
        }
        
        $__internal_37c683db12a0df80427d1bcf48980a964ccc39fde4ecfb1850ec7003a514d6d6->leave($__internal_37c683db12a0df80427d1bcf48980a964ccc39fde4ecfb1850ec7003a514d6d6_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 21,  91 => 20,  84 => 18,  81 => 17,  74 => 13,  71 => 12,  68 => 11,  66 => 10,  62 => 9,  56 => 8,  52 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'HamsterHubBundle:Base:index.html.twig' %}*/
/* */
/* {% block container %}*/
/* */
/* {% for liens in videos %}*/
/*   <div id="{{ liens.id }}">*/
/*     <h1>{{ liens.name }}</h1>*/
/*     de {{ liens.user }} le {{ liens.date|date("d/m/Y") }}<br>*/
/*     <iframe width="560" height="315" src="{{ liens.url }}" frameborder="0" allowfullscreen></iframe><br>*/
/*     {% if ((is_granted("IS_AUTHENTICATED_REMEMBERED")) or (is_granted("IS_AUTHENTICATED_FULLY"))) %}*/
/*       {% if (is_granted('ROLE_ADMIN')) or (( liens.user ) == ( app.user.username )) %}*/
/*         <form id="delete" method="post">*/
/*           <input type="hidden" name="id" value="{{ liens.id }}">*/
/*           <input type="submit" name="delete" value="Supprimer">*/
/*         </form>*/
/*       {% endif %}*/
/*     {% endif %}*/
/*   </div><br><br>*/
/*   {% endfor %}*/
/* {% if ((is_granted("IS_AUTHENTICATED_REMEMBERED")) or (is_granted("IS_AUTHENTICATED_FULLY"))) %}*/
/*     <form id="upload" method="post">*/
/*         <input type="text" name="name"> NAME<br>*/
/*         <input type="text" name="url"> URL<br>*/
/*         <input type="submit" name="formVideo" value="Upload">*/
/*     </form>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
