<?php

/* HamsterHubBundle:Base:menu.html.twig */
class __TwigTemplate_6a1a1d63b802ca2bb50f6497a90be5b312d32070359b2de285c5a2b1b674c1d2 extends Twig_Template
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
        $__internal_7ec6e674b88d18b53af763fc9b328dfec87d52695ca7b8887d9c278fdeca8f04 = $this->env->getExtension("native_profiler");
        $__internal_7ec6e674b88d18b53af763fc9b328dfec87d52695ca7b8887d9c278fdeca8f04->enter($__internal_7ec6e674b88d18b53af763fc9b328dfec87d52695ca7b8887d9c278fdeca8f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Base:menu.html.twig"));

        // line 1
        echo "<nav id='cssmenu'>
    <ul>
       <li class='active'><a href='/'><span>Accueil</span></a></li>
       ";
        // line 4
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED") || $this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 5
            echo "          <li><a href='/profile'><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</span></a></li>
          <li><a><span id=\"postVids\">Poster une vidéo</span></a></li>
          <li><a href='/logout'><span>Déconnexion</span></a></li>
       ";
        } else {
            // line 9
            echo "          <li><a><span id=\"logIn\">Connexion</span></a></li>
          <li><a><span id=\"register\">Inscription</span></a></li>
       ";
        }
        // line 12
        echo "       <li class=\"last\"><a><span><input type=\"text\" name=\"search\" placeholder=\"Recherche\"></span></a></li>
    </ul>
</nav>
";
        
        $__internal_7ec6e674b88d18b53af763fc9b328dfec87d52695ca7b8887d9c278fdeca8f04->leave($__internal_7ec6e674b88d18b53af763fc9b328dfec87d52695ca7b8887d9c278fdeca8f04_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Base:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 12,  37 => 9,  29 => 5,  27 => 4,  22 => 1,);
    }
}
/* <nav id='cssmenu'>*/
/*     <ul>*/
/*        <li class='active'><a href='/'><span>Accueil</span></a></li>*/
/*        {% if ((is_granted("IS_AUTHENTICATED_REMEMBERED")) or (is_granted("IS_AUTHENTICATED_FULLY"))) %}*/
/*           <li><a href='/profile'><span>{{app.user.username}}</span></a></li>*/
/*           <li><a><span id="postVids">Poster une vidéo</span></a></li>*/
/*           <li><a href='/logout'><span>Déconnexion</span></a></li>*/
/*        {% else %}*/
/*           <li><a><span id="logIn">Connexion</span></a></li>*/
/*           <li><a><span id="register">Inscription</span></a></li>*/
/*        {% endif %}*/
/*        <li class="last"><a><span><input type="text" name="search" placeholder="Recherche"></span></a></li>*/
/*     </ul>*/
/* </nav>*/
/* */
